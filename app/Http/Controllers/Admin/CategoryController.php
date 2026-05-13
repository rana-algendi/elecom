<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category; // تأكدي إن الموديل موجود
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // عرض صفحة إضافة قسم جديد
    public function index()
    {
        return view('admin.category.create'); 
    }

    // عرض صفحة إدارة الأقسام (الجدول)
    public function manage()
    {
        $categories = Category::latest()->get(); // جلب كل الأقسام وترتيبها من الأحدث
        return view('admin.category.manage', compact('categories'));
    }

    // ميثود حفظ القسم الجديد في الداتا بيز
    public function store(Request $request)
    {
        // 1. التحقق من البيانات (Validation)
        $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        // 2. حفظ البيانات
        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)), // تحويل الاسم لـ slug (مثل: electronics-gear)
        ]);

        // 3. الرجوع برسالة نجاح
        return redirect()->route('category.manage')->with('message', 'Category Added Successfully!');
    }

    // ميثود لعرض صفحة التعديل
    public function edit($id)
    {
        $category_info = Category::findOrFail($id);
        return view('admin.category.edit', compact('category_info'));
    }

    // ميثود تحديث البيانات
    public function update(Request $request)
    {
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories,category_name,'.$category_id.'|max:255',
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        return redirect()->route('category.manage')->with('message', 'Category Updated Successfully!');
    }

    // ميثود الحذف
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('category.manage')->with('message', 'Category Deleted Successfully!');
    }
}
