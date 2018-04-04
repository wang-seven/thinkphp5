<?php
namespace app\index\controller;     // 该文件的位于application\index\controller文件夹
// 导入app\common\model\Teacher模型，并给它重新起个名字：SmallTeacher
use app\common\model\Teacher;
use think\Controller;  // 教师模型 带有别名
/**
 * 教师管理
 */
class TeacherController extends Controller
{
    public function index()
    {
        $Teacher = new Teacher;
        $teachers = $Teacher->select();

        // 向V层传数据
        $this->assign('teachers', $teachers);

        // 取回打包后的数据
        $htmls = $this->fetch();

        // 将数据返回给用户
        return $htmls;
    }
}