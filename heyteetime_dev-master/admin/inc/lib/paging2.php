<?php
/**
@program : 페이징 클래스 - 서비스관리자용
@description : 페이징
@fileinfo : /inc/lib/paging2.php
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
class mwPaging2
{
	var $total_item;
	var $total_page;

	var $start_page, $end_page;
	var $start_pos;
	var $cur_page;
	var $max_page;

	var $start_no;
	
	
	var $view_count, $page_count;	// 페이지당 리스트 갯수, 페이지 블럭수

	function mwPaging2($view_count, $page_count)
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

		

		$this->cur_page = $_REQUEST["page2"]; 	

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
		$rt_str = "<input type='hidden' name='page2' value=".$this->cur_page.">";
		return $rt_str;        
	}

	// type = 0:내장, 1: js 함수, 2: url
	function Show($form_name, $method='get')
	{
		$rt_str="";

		$form = "document.".$form_name;
		

		$rt_str .= "<script language='javascript'>\n";
			
		$rt_str .= "function goPage2(page) { $form.page2.value = page; $form.method ='$method'; $form.action='".$_SERVER['SCRIPT_URL']."'; $form.submit(); }\n";		
//		$rt_str .= "function goPage(page) { $form.page.value = page; $form.method ='$method'; $form.submit(); }\n";				
		$rt_str .= "</script>\n";		

		$rt_str .= "<div class=\"PagingNav\">\n";
		
		
		### double prev

		$double_preview = $this->cur_page > 1;

		if($double_preview)	{		
			//$rt_str .= "<span class=\"prevEnd\"><img src=\"/adm/images/prevEnd03.gif\" alt=\"맨처음\" onclick=\"goPage(1)\" style='cursor:pointer'/></span>\n";
			$rt_str .= "<a class='pre_end' href=\"javascript:goPage2(1)\" alt='처음'>&nbsp;</a>  \n";
		}
		else {
			$rt_str .= "<a class='pre_end'>&nbsp;</a>  \n";
			
		}
		

		##### prev 
		$is_preview = $this->start_page - $this->page_count;
		
		if($is_preview > 0)
		{
    		
			$rt_str .= "<a class='pre_n' href=\"javascript:goPage2(".$is_preview.")\" alt='이전'>&nbsp;</a>";
		}
		else {
			$rt_str .= "<a class='pre_n' href=\"javascript:goPage2(1)\">&nbsp;</a>";
		}
		
		
		####### numbering

		$rt_str .= "<span class=\"paging_numbers\">\n";
		
		if($this->end_page == 0 ) {
			$rt_str .= "<a class='num_on'>1</a>\n";
		}

		else {
		
			for($i = $this->start_page; $i <= $this->end_page; $i++)
			{
				$rt_str .="<a href='javascript:goPage2(".$i.")'";
				if($i == $this->cur_page) $rt_str .= " class='num_on'";
				else $rt_str .= " class='num'";
				$rt_str .= ">$i</a>\n";
				$rt_str .="\n";
			}
		}


		$rt_str .= "</span>";
		

		###### next 
		$is_next = $this->start_page + $this->page_count < $this->total_page;

		
		if($is_next)
		{
    		$pos = $this->start_page + $this->page_count;
			if($pos > $this->total_page ) $pos = $this->total_page;

            $rt_str .= "<a class=\"next_n\" href='";
            $rt_str .= "javascript:goPage2(".$pos.")";           
            $rt_str .= "' >&nbsp;";
			$rt_str .= "</a>\n";
		}
		else {
			$rt_str .= "<a class=\"next_n\" href=\"javascript:goPage2(".$this->end_page.")\">&nbsp;</a>\n";
		}

		
		
		

		##### double next
		
		$mv = $this->total_page;
		$last_page = $this->total_page - $this->cur_page;
		if($last_page > 0)
			$rt_str .= "<a class=\"next_end\" href='javascript:goPage2(".$mv.")'>&nbsp;</a>";
		else
			$rt_str .= "<a class=\"next_end\" href=\"javascript:goPage2(".$this->end_page.")\">&nbsp;</a>";
		
		
		

		###### end
		$rt_str .= "</div>";

		return $rt_str;
	}

	function printEndPage(){
		echo $this->end_page;
	}
}	
?>