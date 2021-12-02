<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Base\BaseModel;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getById($id)
    {
        $query = BaseModel::getDetail($id);
        return $query;
    }
}
