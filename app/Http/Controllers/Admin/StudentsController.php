<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Student\CreateRequest;
use App\Http\Requests\Student\EditRequest;
use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.index', [
            'students' => Student::paginate(7)
        ]);
    }
    public function import(Request $request)
    {
        if ($_FILES['files']['type'] =='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            Excel::import(new StudentsImport, $request->file('files'));

            return redirect()->route('admin.students.index')
                ->with('success', __('messages.admin.students.import.success'));
        }
        else {
            return back()->with('error', __('messages.admin.students.import.fail'));
        }



    }

    public function export() {

        return Excel::download(new StudentsExport, 'students.xlsx');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @param Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request, Student $student)
    {



        $data = $request->only(['user_family',
            'user_name',
            'email',
            'country',
            'city',
            'login',
            'pass']);
        $student = Student::create($data);
        if($student){
            return redirect()->route('admin.students.index')
                ->with('success', __('messages.admin.students.create.success'));
        }
        return back()->with('error', 'messages.admin.students.create.fail');
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        return view('admin.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditRequest $request
     * @param Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EditRequest $request, Student $student)
    {


        $student->fill($request->validated());

        if($student->save()){
            return redirect()->route('admin.students.index')
                ->with('success', __('messages.admin.students.update.success'));
        }
        return back()->with('error', 'messages.admin.students.update.fail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Student $student): JsonResponse
    {
        try {
            $student->delete();

            return response()->json(['status'=>'ok']);

        }catch (\Exception $e) {
            Log::error("News was't delete" );
            return response()->json(['status'=>'error'], 400);
        }
    }

}
