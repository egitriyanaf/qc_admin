<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProduksi extends Model
{
    protected $table = 'jdcadp_mstproduksi';
    protected $primarykey = 'product_id';
    protected $fillable=[
        'created_by',
        'created_date',
        'last_updated_by',
        'last_updated_date',
        'demand_date',
        'gac_date',
        'igac_date',
        'ogac_date',
        'rgac_date',
        'sch_start_date',
        'address1',
        'address1_line',
        'city',
        'product_desc',
        'fg_desc',
        'jo_ppic',
        'line_code',
        'po_item',
        'po_no',
        'qty',
        'size',	
        'org_id',	
        'flag_log_save',	
        'flag_log_submit',	
        'flag_lot_upload',	
        'job_order',	
        'jo_start_date',	
        'jo_end_date',	
        'project_alias',	
        'label_ins',	
        'demand_class',	
        'log_remark',
    ];
}
