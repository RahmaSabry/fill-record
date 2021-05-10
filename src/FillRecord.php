<?php
namespace Rahmasa\FillRecord;


trait FillRecord
{
	public static function bootFillRecord()
	{
		static::creating(function ($model) {
			$model->created_by_user = auth()->user()->id;
			$model->created_by_ip = \Request::ip();
		});
		
		static::updating(function ($model) {
			$model->updated_by_user = auth()->user()->id;
			$model->updated_by_ip = \Request::ip();
		});
	}

} 