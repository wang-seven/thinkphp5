<?php
namespace app\index\controller;     // 该文件的位于application\index\controller文件夹
// 导入app\common\model\Teacher模型，并给它重新起个名字：SmallTeacher
use app\common\model\Teacher;  // 教师模型 带有别名
/**
 * 教师管理
 */
class TeacherController
{
    public function index()
    {
        $Teacher = new Teacher;
        $teacher = $Teacher ->select();
        dump($teacher);
    }
}