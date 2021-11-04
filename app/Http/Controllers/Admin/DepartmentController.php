<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DepartmentController extends Controller
{
  public function index ()
  {
      $department = Department::all();
      return view('admin.department.index')->with('department', $department);
  }

  public function add() {
      return view ('admin.department.add');
  }
  public function store(Request $request) {
    $department = new Department() ;
    $department-> name = $request->input('name');

    $department-> description = $request->input('description');

    $department->save();
    return redirect('department')->with('status','Department ajouté');

  }
  public function edit ($id) {

    $department = Department::find($id);
    return view ('admin.department.edit')->with('department' ,$department);

  }

  public function update (Request $request , $id ){

    $department= Department :: find($id);
    $department->name = $request->input('name');

    $department ->description = $request ->input('description');

    $department->update();
    return redirect('department')->with('status','Department modifié avec succés');
  }

    public function delete($id)

    {
        $department =Department::find($id);
        $department->delete();
        return redirect()->back()->with('status', 'Department supprimé avec succés');
    }
}
