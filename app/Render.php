<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Render extends Model
{
    public static function action(array $action)
    {
    	$url = '';
    	foreach ($action as $key => $value) {
    		if ($key == 'url') {
                $url = $value;
            }

            if ($key == 'label') {
    			$label = $value;
    		}

    		if ($key == 'show') {
    			$html = "<a data-original-title='Show $label Details' href='$url' data-toggle='tooltip' data-placement='bottom' class='btn btn-icon btn-circle btn-success'>
				          <i class='fa fa-file-text-o'></i>
				        </a> &nbsp";
		        echo $html;
    		}

    		if ($key == 'edit') {
    			$html = "<a data-original-title='Edit $label Details' href='$url/edit' data-toggle='tooltip' data-placement='bottom' class='btn btn-icon btn-circle btn-warning'>
				          <i class='fa fa-edit'></i>
				        </a> &nbsp";
		        echo $html;
    		}

    		if ($key == 'delete') {
    			$html = "<a data-original-title='Delete $label' href='$url' data-toggle='tooltip' data-placement='bottom' class='btn btn-icon btn-circle btn-danger'>
				          <i class='fa fa-times'></i>
				        </a> &nbsp";
		        echo $html;
    		}

    		if ($key == 'default') {
    			$html = "<a data-original-title='Show $label Details' href='$url' data-toggle='tooltip' data-placement='bottom' class='btn btn-icon btn-circle btn-success'>
				          <i class='fa fa-file-text-o'></i>
				        </a> &nbsp
				        <a data-original-title='Edit $label Details' href='$url/edit' data-toggle='tooltip' data-placement='bottom' class='btn btn-icon btn-circle btn-warning'>
          					<i class='fa fa-edit'></i>
        				</a> &nbsp
        				<a type='button' data-original-title='Delete $label' data-placement='bottom' class='btn btn-icon btn-circle btn-danger' data-toggle='modal' data-target='#deletePermission'>
				          <i class='fa fa-times'></i>
				        </a> &nbsp";
		        echo $html;
    		}
    	}
    }

}
