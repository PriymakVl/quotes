<?php

trait Pagination {
	
	public function getDataForPage($data, $limit)
	{
		$this->pagination = $this->initPagination($limit, $data);
		return $this->selectPagination($data);
	}

	public function selectPagination($data, $pagination)
	{
		$result = [];
		foreach ($data as $key => $item) {
			if ($key < $this->pagination->start) continue;
			if ($key > $this->pagination->end) break;
			$result[] = $item;
		}
		return $result;
	}

	public function initPagination($limit, $data)
	{
		$pagination['page'] = $this->get->page ? $this->get->page : 1;
		$pagination['start'] = ($pagination['page'] - 1) * $limit;
		$pagination['end'] = ($pagination['page'] * $limit) - 1;
		$pagination['limit'] = $limit;//number items of displayed on the page
		$pagination['all'] = ceil(count($data) / $limit);//all pages
		$pagination['total'] = count($data);//total quntity items 
		$pagintion['links'] = '';
		return (object) $pagination;
	} 

	public function getPagination()
	{
		if ($this->pagination) $this->pagination->links = $this->createLinksPagination();
		return $this->pagination;
	}



	public function createLinksPagination() 
	{
    	$html = '<ul class="pagination justify-content-center">';
		$html .= sprintf('<li class="page-item"><a class="page-link" href="%s">&laquo;</a></li>',  Url::changeGetValue('page', $this->pagination->page - 1));
    	if ($this->pagination->page - 2 != 1 && $this->pagination->page - 1 != 1 && $this->pagination->page != 1) {
    		$html .= sprintf('<li class="page-item"><a href="%s">%s</a></li>',  Url::changeGetValue('page', 1), 1);
    	}
    	if ($this->pagination->page - 2 > 0) $html .= sprintf('<li class="page-item"><a class="page-link" href="%s">%s</a></li>', Url::changeGetValue('page', $this->pagination->page - 2), $this->pagination->page - 2);
    	if ($this->pagination->page - 1 > 0) $html .= sprintf('<li class="page-item"><a class="page-link" href="%s">%s</a></li>', Url::changeGetValue('page', $this->pagination->page - 1), $this->pagination->page - 1);

    	$html .= sprintf('<li class="page-item active"><a class="page-link" href="%s" class="active">%s</a></li>', Url::changeGetValue('page', $this->pagination->page), $this->pagination->page);
    	
    	if (($this->pagination->page + 1) * $this->pagination->limit <= $this->pagination->total) {
    		$html .= sprintf('<li class="page-item"><a class="page-link" href="%s">%s</a></li>', Url::changeGetValue('page', $this->pagination->page + 1), $this->pagination->page + 1);
		} 
		if (($this->pagination->page + 2) * $this->pagination->limit < $this->pagination->total) {
    		$html .= sprintf('<li class="page-item"><a class="page-link" href="%s">%s</a></li>', Url::changeGetValue('page', $this->pagination->page + 2), $this->pagination->page + 2);
		} 
		if ($this->pagination->page != $this->pagination->all && $this->pagination->page + 1 != $this->pagination->all && $this->pagination->page = 2 != $this->pagination->all) {
    		$html .= sprintf('<li class="page-item"><a class="page-link" href="%s">%s</a></li>', Url::changeGetValue('page', $this->pagination->all), $this->pagination->all);
		} 
		$html .= sprintf('<li class="page-item"><a class="page-link" href="%s">&raquo;</a></li>', Url::changeGetValue('page', $this->pagination->page + 1));
    	return $html .= '</ul>';
	}


}