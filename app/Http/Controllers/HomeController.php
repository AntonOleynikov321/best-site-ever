<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6c76b70cb6497769b3c43cba2787e1499b6f323d
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        $user = $request->user();
        $teachers_group=$user->teach_groups;
        $students_group=$user->student_groups;
        

        return view('cabinet.index', [
            'teachers_group' => $teachers_group,
            'students_group' => $students_group,
        ]);
    }

}
<<<<<<< HEAD
=======
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        $user = $request->user();
        $teachers_group=$user->teach_groups;
        $students_group=$user->student_groups;
        

        return view('cabinet.index', [
            'teachers_group' => $teachers_group,
            'students_group' => $students_group,
        ]);
    }

}
>>>>>>> dev
=======
>>>>>>> 6c76b70cb6497769b3c43cba2787e1499b6f323d
