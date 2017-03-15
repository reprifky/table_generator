<?php
/**
 * Created by PhpStorm.
 * User: Rifky_Rep
 * Date: 07/03/2017
 * Time: 11.50
 */
namespace Tools\Table_Generator;

class Table_Generator{
    public function __construct($datatable,$color='white',$op=null){
        $this->datatable = $datatable;
        $this->color = $color;
        $this->op = $op===null?' border="1px" align="center" style="border-collapse:collapse;background-color:'.$this->color.'" id="q"':$op;
    }


    public function generate(){
        if(!isset($this->tablename)){
            $this->tablename = array('GROUP','SINGLE');
        }
        $html = "";
        $k = 0;

        for ($i=0;$i<count($this->datatable);$i++){
            if ($i === 0){
                $a['t'.$k][] = $this->datatable[$i];
            }else
            if ($this->datatable[$i]['is-group']===true){
                $a['t'.$k][] = $this->datatable[$i];
            }else{
                $a['t'.(++$k)][] = $this->datatable[$i];
            }
        }
        for ($i=0;$i<count($a);$i++){
            $kolom = count($a['t'.$i]);
            $baris = count($a['t'.$i][0]['data']);
            $html.= '<table'.$this->op.'><tr><td style="font-size:19px;font-style:italic" align="center" colspan="'.$kolom.'">'.($a['t'.$i][0]['is-group']===true?$this->tablename[0]:$this->tablename[1]).'</td></tr>';
            for ($j=0;$j<$baris;$j++){
                $html.='<tr>';
                for($l=0;$l<$kolom;$l++){
                    $html.='<td>'.$a['t'.$i][$l]['data'][$j].'</td>';
                }
                $html.='</tr>';
            }
        }
        return $html;
    }
}