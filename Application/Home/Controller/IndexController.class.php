<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

//    导入
    public function import(){

        if(!empty($_FILES['file_stu']['name'])){
            $tmp_file = $_FILES['file_stu']['tmp_name'];    //临时文件名
            $file_types = explode('.',$_FILES['file_stu']['name']); //  拆分文件名
            $file_type = $file_types [count ( $file_types ) - 1];   //  文件类型

//            print_r($file_type);

            /*判断是否为excel文件*/
            if($file_type == 'xls' || $file_type == 'xlsx'|| $file_type == 'csv'){    //  符合类型

                /*上传业务*/
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;
                $upload->exts      =     array('xls', 'csv', 'xlsx');
                $upload->rootPath  =      './Public';
                $upload->savePath  =      '/Excel/';
                $upload->saveName  =      date('YmdHis');
                $info   =   $upload->upload();
                if(!$info) {    // 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{  // 上传成功

                    //  读取文件
                    $filename='./Public'.$info['file_stu']['savepath'].$info['file_stu']['savename'];
                    import("Org.Yufan.ExcelReader");
                    vendor('PHPExcel.PHPExcel');
                    $reader = \PHPExcel_IOFactory::createReader('Excel2007'); //设置以Excel5格式(Excel97-2003工作簿)
                    $PHPExcel = $reader->load($filename); // 载入excel文件
                    $sheet = $PHPExcel->getSheet(0); // 读取第一個工作表
                    $highestRow = $sheet->getHighestRow(); // 取得总行数
                    $highestColumm = $sheet->getHighestColumn(); // 取得总列数

                    /** 循环读取每个单元格的数据 */
                    $data = array();
                    for ($row = 2; $row <= $highestRow; $row++){//行数是以第1行开始

                        if($column = 'A'){
                            $data['name'] = $sheet->getCell($column.$row)->getValue();
                        }
                        if($column = 'B'){
                            $data['account'] = $sheet->getCell($column.$row)->getValue();
                        }
                        if($column = 'C'){
                            $data['password'] = $sheet->getCell($column.$row)->getValue();
                        }

                        M('data')->add($data);
                    }

                        $this->success('导入数据库成功',__APP__.'/Home/Index/show');

                }

            } else{ //  不符合类型业务
                $this->error('不是excel文件，请重新上传...');
            }

        }

    }


    //导出
    public function export(){
        import("ORG.Yufan.Excel");
        $list = M('data')->select();

        if($list == null){
            $this->error('数据库信息为空...',__APP__.'/Home/Index/show');
        }else{
            $row=array();
            $row[0]=array('平台名称','帐号','密码');
            $i=1;
            foreach($list as $v){
                $row[$i]['name'] = $v['name'];
                $row[$i]['account'] = $v['account'];
                $row[$i]['password'] = $v['password'];
                $i++;
            }

//        echo '<pre>';
//        print_r($row);

            $xls = new \Excel_XML('UTF-8', false, 'datalist');
            $xls->addArray($row);
            $xls->generateXML(date('YmdHis'));
        }


    }


    public function show(){
        $m = M('data');
        $data = $m->select();
//        echo '<pre>';
//        print_r($data);
        $this->assign('data',$data);
        $this->display();
    }


}