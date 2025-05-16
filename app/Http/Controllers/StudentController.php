<?php



namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;
use App\Models\User;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {

        $students = Student::all();

        return view('student.index', ['students' => $students]);
    }

    public function show(Student $student)
    {
        return view('student.show', ['student' => $student]);
    }

    public function create()
    {
        $cities = City::all();
        return view('student.create', ['cities' => $cities]);
    }


    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required| min:5',
            'address' => 'required| max:30',
            'phone' => 'required| max:30',
            'email' => 'required|unique:students',
            'date' => 'required',

        ]);

        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'city_id' => $request->city_id,
            'user_id' => 1,


        ]);

        return redirect()->route('student.index', $student->id)->with('success', 'Student was added successfully');
    }
}
