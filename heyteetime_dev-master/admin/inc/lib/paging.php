<?php
/**
@program : 페이징 클래스 - 서비스관리자용
@description : 페이징
@fileinfo : /inc/lib/paging.php
@filedescription : class
@auth : 현민원
@since : 2018.04

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
	function GetTotalCnt()				{ return $this->total_item; }

	function Set($total_item)
	{
		//global $_GET, $_POST;
		if(empty($total_item)) $total_item =0;

		if(empty($_REQUEST["page"])) $_REQUEST["page"] =1;

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


	// type = 0:내장, 1: js 함수, 2: url
	function Show($form_name, $method='get')
	{
		$rt_str="";

		$form = "document.".$form_name;
		

		$rt_str .= "<script language='javascript'>\n";
			
		$rt_str .= "function goPage(page) { $form.page.value = page; $form.method ='$method'; $form.action='".$_SERVER['SCRIPT_NAME']."'; $form.submit(); }\n";		
//		$rt_str .= "function goPage(page) { $form.page.value = page; $form.method ='$method'; $form.submit(); }\n";				
		$rt_str .= "</script>\n";		

		$rt_str .= "<div id=\"SYPageBox\">\n";
		
		
		### double prev

		$double_preview = $this->cur_page > 1;

		if($double_preview)	{		
			//$rt_str .= "<a class='pre_end' href=\"javascript:goPage(1)\" alt='처음'>&nbsp;</a>  \n";
			$rt_str .= "<a href='javascript:goPage(1)' ><img src='/_global/img/sy_btn_arrow_prev01.gif' alt='맨앞'  class='btn' border='0' style='width:14px;height:21px' ></a>\n";
		}
		else {
			//$rt_str .= "<a class='pre_end'>&nbsp;</a>  \n";
			$rt_str .= "<a ><img src='/_global/img/sy_btn_arrow_prev01.gif' alt='맨앞' class='btn' border='0' style='width:14px;height:21px' ></a>\n";
			
		}
		

		##### prev 
		$is_preview = $this->start_page - $this->page_count;
		
		if($is_preview > 0)
		{	
			//$rt_str .= "<a class='pre_n' href=\"javascript:goPage(".$is_preview.")\" alt='이전'>&nbsp;</a>";
			$rt_str .= "<a href=\"javascript:goPage(".$is_preview.")\"><img src='/_global/img/sy_btn_arrow_prev02.gif' style='width:10px;height:15px'></a>";
		}
		else {
			//$rt_str .= "<a class='pre_n' href=\"javascript:goPage(1)\">&nbsp;</a>";
			$rt_str .= "<a href=\"javascript:goPage(1)\"><img src='/_global/img/sy_btn_arrow_prev02.gif' style='width:10px;height:15px'></a>";
		}
		
		
		####### numbering

		$rt_str .= "<span id=\"SYPageNumber\">\n";
		
		if($this->end_page == 0 ) {
			$rt_str .= "<b> 1 </b>\n";
		}

		else {
		
			for($i = $this->start_page; $i <= $this->end_page; $i++)
			{
				/*
				$rt_str .="<a href='javascript:goPage(".$i.")'";
				if($i == $this->cur_page) $rt_str .= " class='num_on'";
				else $rt_str .= " class='num'";
				$rt_str .= ">$i</a>\n";
				$rt_str .="\n";
				*/
				if($i == $this->cur_page) {
					$rt_str .= "<b> ".$i." </b>\n";
				}
				else {
					$rt_str .= "<a href='javascript:goPage(".$i.")'> ".$i." </a>";
				}
			}
		}


		$rt_str .= "</span>";
		

		###### next 
		$is_next = $this->start_page + $this->page_count <= $this->total_page;

		//echo "페이지카운트 + 시작페이지 = ".($this->start_page + $this->page_count);
		//echo "전체페이지 = ".($this->total_page);

		
		if($is_next)
		{
    		$pos = $this->start_page + $this->page_count;
			if($pos > $this->total_page ) $pos = $this->total_page;

            $rt_str .= "<a href='javascript:goPage(".$pos.")'><img src=\"/_global/img/sy_btn_arrow_next02.gif\" style='width:10px;height:15px'></a>\n";
		}
		else {
			//$rt_str .= "<a class=\"next_n\" href=\"javascript:goPage(".$this->end_page.")\">&nbsp;</a>\n";
			$rt_str .= "<a href='javascript:goPage(".$this->end_page.")'><img src=\"/_global/img/sy_btn_arrow_next02.gif\" style='width:10px;height:15px'></a>\n";
		}

		
		
		

		##### double next
		
		$mv = $this->total_page;
		$last_page = $this->total_page - $this->cur_page;
		if($last_page > 0) {
			//$rt_str .= "<a class=\"next_end\" href='javascript:goPage(".$mv.")'>&nbsp;</a>";
			$rt_str .= "<a href='javascript:goPage(".$mv.")' ><img src='/_global/img/sy_btn_arrow_next01.gif' alt='맨앞' class='btn' border='0' style='width:14px;height:21px'></a>";
		}
		else {
			//$rt_str .= "<a class=\"next_end\" href=\"javascript:goPage(".$this->end_page.")\">&nbsp;</a>";
			$rt_str .= "<a href='javascript:goPage(".$this->end_page.")' ><img src='/_global/img/sy_btn_arrow_next01.gif' alt='맨앞' class='btn' border='0' style='width:14px;height:21px'></a>";
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