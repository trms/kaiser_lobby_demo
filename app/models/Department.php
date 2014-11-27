<?php


class Department extends Eloquent {

	

	public function scopeSearch($query, $search)
	{
		return $query->where('longname','LIKE',"%$search%");
	}

}
