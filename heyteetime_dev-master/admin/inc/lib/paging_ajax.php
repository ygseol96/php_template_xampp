<?php
/**
@program : 페이징 클래스 - 관리자용 
@description : AJAX 페이징
@fileinfo : /inc/lib/paging_ajax.php
@filedescription : class
@auth : 현민원
@since : 2021.10

example)

	$mwPaging = new mwPaging($_REQUEST[s_viewCount], $_REQUEST[s_page_block]);
	$mwPaging->Set($cnt);	// select count(*) .. 리스팅 카운트한 갯수
	$s_limit = " limit ".$mwPaging->GetStartPos().", ".$_REQUEST[s_viewCount];


	//페이징 뷰
	$PageStr = $mwPaging->PrintHidden().$mwPaging->Show("iform","get");


**/
class mwPaging
{
	var $total_item;
	var $total_page;

	var $start_page, $end_page;
	var $start_pos;
	var $cur_page;
	var $max_page;

	var $start_no;
	
	
	var $view_count, $page_count;	// 페이지당 리스트 갯수, 페이지 블럭수

	function __construct($view_count, $page_count)	{
		$this->view_count = $view_count;
		$this->page_count = $page_count;
	}

	function mwPaging($view_count, $page_count)
	{
		$this->view_count = $view_count;
		$this->page_count = $page_count;
	}

	function GetStartPos()				{ return $this->start_pos; }
	function GetStartNo()				{ return $this->start_no; }
	function GetCurPage()				{ return $this->cur_page; }
	function GetTotalPage()				{ return $this->total_page; }

	function Set($total_item)
	{
		//global $_GET, $_POST;

		

		$this->cur_page = $_REQUEST["page"]; 	

		if($this->cur_page == '') $this->cur_page = 1;

		
		$this->total_item = $total_item;

		$this->start_pos = ($this->cur_page - 1) * $this->view_count;
		
		$this->total_page = ceil($this->total_item/$this->view_count);

		$this->start_page = (floor(($this->cur_page-1)/$this->page_count) * $this->page_count) + 1;	// 시작페이지
		$this->end_page = $this->start_page + $this->page_count - 1;

		if($this->end_page > $this->total_page) $this->end_page = $this->total_page;

		$this->start_no = $total_item - (($this->cur_page - 1) * $this->view_count);

		
	}

	function PrintHidden()
	{
        $rt_str="";
		$rt_str = "<input type='hidden' name='page' value=".$this->cur_page.">";
		return $rt_str;        
	}


	// type = 0:내장, 1: js 함수, 2: url
	function Show($form_name, $method='get')
	{
		$rt_str="";

		$form = "document.".$form_name;
		
		

		$rt_str .= "<script language='javascript'>\n";
			
		$rt_str .= "
			function goPageAjax(page) { 
				
				var url = $form.ajax_prg_name.value;				
				var layer_id = $form.ajax_prg_layer.value;
				var mode = $form.ajax_mode.value;
				var data = $form.ajax_prg_param.value +'&page='+page+'&layer_id='+ layer_id+'&mode='+mode;
				

				$.get(url+'?'+data, 
					function(json) { 
						var obj = $.parseJSON(json); 
						if(obj.result == 'Y') {

							var vhtml = decodeURIComponent(obj.msg);
							$('#'+layer_id).html(vhtml);

						}
						else {
							alert(decodeURIComponent(obj.msg));
						}
					}
				);
				
			}
		";			
		$rt_str .= "</script>\n";		
			
		
		/*
		<div class="paging-wrap">
                <a href="javascript:void(0)" class="first disabled"><i class="el-icon-d-arrow-left"></i></a>
                <a href="javascript:void(0)" class="prev disabled"><i class="el-icon-arrow-left"></i></a>
                <a href="javascript:void(0)">1</a>
                <a href="javascript:void(0)">2</a>
                <a href="javascript:void(0)">3</a>
                <a href="javascript:void(0)" class="next"><i class="el-icon-arrow-right"></i></a>
                <a href="javascript:void(0)" class="last"><i class="el-icon-d-arrow-right"></i></a>
            </div>
		*/

		/*
		<div id="SYPageBox">
							
				<a href='javascript:goPage(1)' ><img src='../img/sy_btn_arrow_prev01.gif' alt='맨앞' class='btn' border='0'></a>	
				<a href="javascript:goPage(1)"><img src="../img/sy_btn_arrow_prev02.gif"></a>

				<span id="SYPageNumber">
					<a href='javascript:goPage(1)'>1 </a>
					<b> 2 </b>
					<a href='javascript:goPage(1)'>3 </a>
					<a href='javascript:goPage(1)'>4 </a>
					<a href='javascript:goPage(1)'>5 </a>
				</span>


				<a href="javascript:goPage(1)"><img src="../img/sy_btn_arrow_next02.gif"></a>
				<a href='javascript:goPage(1)' ><img src='../img/sy_btn_arrow_next01.gif' alt='맨앞' class='btn' border='0'></a>
			</div>
		*/


		

		$rt_str .= "<div id=\"SYPageBox\">\n";
		
		
		### double prev

		$double_preview = $this->cur_page > 1;

		if($double_preview)	{		
			$rt_str .= "<a href=\"javascript:goPageAjax(1)\" ><img src='../img/sy_btn_arrow_prev01.gif' alt='맨앞' class='btn' border='0'></a>";
		}
		else {
			$rt_str .= "<a href=\"javascript:void(0)\" ><img src='../img/sy_btn_arrow_prev01.gif' alt='맨앞' class='btn' border='0'></a>";
		}
		

		##### prev 
		$is_preview = $this->start_page - $this->page_count;
		
		if($is_preview > 0)
		{
    		//$rt_str .= "<a href=\"javascript:goPageAjax(".$is_preview.")\" class=\"prev \"><i class=\"el-icon-arrow-left\"></i></a>";
			$rt_str .= "<a href=\"javascript:goPageAjax(".$is_preview.")\" ><img src=\"../img/sy_btn_arrow_prev02.gif\"></a>";
		}
		else {
			//$rt_str .= "<a href=\"javascript:void(0)\" class=\"prev disabled\"><i class=\"el-icon-arrow-left\"></i></a>";
			$rt_str .= "<a href=\"javascript:void(0)\" ><img src=\"../img/sy_btn_arrow_prev02.gif\"></a>";
		}



		
		
		
		####### numbering

		$rt_str .="<span id=\"SYPageNumber\">";
		
		if($this->end_page == 0 ) {
			//$rt_str .= "<strong class=\"border\">1</strong>\n";
			$rt_str .= "<b> 1 </b>\n";
		}

		else {
		
			for($i = $this->start_page; $i <= $this->end_page; $i++)
			{
				
				
				if($i == $this->cur_page) $rt_str .= "<b> ".$i." </b>\n";
				else {
					$rt_str .= "<a href=\"javascript:goPageAjax(".$i.")\" >".$i."</a>\n";
				}
				
			}
		}


		$rt_str .="</span>";

		

		###### next 
		$is_next = $this->cur_page + $this->page_count <= $this->total_page;
		
		if($is_next)
		{
    		$pos = $this->start_page + $this->page_count;
			if($pos > $this->total_page ) $pos = $this->total_page;

			$rt_str .= "<a href=\"javascript:goPageAjax(".$pos.")\" ><img src=\"../img/sy_btn_arrow_next02.gif\"></a>\n";
		}
		else {
			$rt_str .= "<a href=\"javascript:void(0)\" ><img src=\"../img/sy_btn_arrow_next02.gif\"></a>\n";
		}
		
		

		##### double next
		
		$mv = $this->total_page;
		$last_page = $this->total_page - $this->cur_page;
		if($last_page > 0) {
			//$rt_str .= "<a href='javascript:goPageAjax(".$mv.")' class=\"nextEnd\">";
			$rt_str .= "<a href=\"javascript:goPageAjax(".$mv.")\" ><img src='../img/sy_btn_arrow_next01.gif' alt='맨뒤' class='btn' border='0'></a>\n";
		}
		else {
			$rt_str .= "<a href=\"javascript:void(0)\" ><img src='../img/sy_btn_arrow_next01.gif' alt='맨뒤' class='btn' border='0'></a>\n";
		}
		
		
		

		###### end
		$rt_str .= "</div>";

		return $rt_str;
	}

	function printEndPage(){
		echo $this->end_page;
	}
}	
?>
