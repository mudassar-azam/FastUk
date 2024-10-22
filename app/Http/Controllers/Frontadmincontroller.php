<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Homepage;
use App\Models\Service;
use Illuminate\Http\Request;

class Frontadmincontroller extends Controller
{
    public function frontadmin()
    {

        $homedata = Homepage::first();
        return view('front_admin.home_page', compact('homedata'));
    }

    public function updatehomepage(Request $request)
    {
        $home = Homepage::firstOrNew(); // Get the first entry from the Homepage table or create a new entry if none exists

        $fields = [
            'SEOTitle',
            'metaDescription',
            'servicesHeadTitle',
            'servicesHeadDesription',
            'service1Title',
            'service1Description',
            'service2Title',
            'service2Description',
            'service3Title',
            'service3Description',
            'service4Title',
            'service4Description',
            'service5Title',
            'service5Description',
            'service6Title',
            'service6Description',
            'service7Title',
            'service7Description',
            'service8Title',
            'service8Description',
            'service9Title',
            'service9Description',
            'section3Title',
            'section3Description',
            'section4Title',
            'section4Description',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $home->$field = $request->input($field);
            }
        }

        if ($request->hasFile('section1Image')) {
            $section1Image = $request->file('section1Image');
            $section1ImageName = time() . '_' . $section1Image->getClientOriginalName();
            $section1Image->move(public_path('homepage'), $section1ImageName);
            $home->section1Image = $section1ImageName;
        }

        for ($i = 1; $i <= 9; $i++) {
            $field = "service{$i}Image";
            if ($request->hasFile($field)) {
                $serviceImage = $request->file($field);
                $serviceImageName = time() . '_' . $serviceImage->getClientOriginalName();
                $serviceImage->move(public_path('homepage'), $serviceImageName);
                $home->$field = $serviceImageName;
            }
        }

        if ($request->hasFile('section3Image')) {
            $section3Image = $request->file('section3Image');
            $section3ImageName = time() . '_' . $section3Image->getClientOriginalName();
            $section3Image->move(public_path('homepage'), $section3ImageName);
            $home->section3Image = $section3ImageName;
        }

        if ($request->hasFile('section4Image')) {
            $section4Image = $request->file('section4Image');
            $section4ImageName = time() . '_' . $section4Image->getClientOriginalName();
            $section4Image->move(public_path('homepage'), $section4ImageName);
            $home->section4Image = $section4ImageName;
        }

        $home->save();
        return redirect()->back()->with('success', 'content updated successfully!');
    }

    public function frontblog()
    {
        $blogs = Blog::all();
        return view('front_admin.frontblog', compact('blogs'));
    }

    public function addblog()
{
    return view('front_admin.addblog');
}

public function storeblog(Request $request)
{
        // Validate the form data
        $request->validate([
            'category' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'title_tag' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
        ]);

        // Process the form data and store it in the database
        // Assuming you have a Blog model representing your blog posts
        $blog = new \App\Models\Blog();
        $blog->category = $request->input('category');
        $blog->username = $request->input('username');

        // Save the user image
        if ($request->hasFile('userimage')) {
            $userImage = $request->file('userimage');
            $userImageName = time() . '_' . $userImage->getClientOriginalName();
            $userImage->move(public_path('userimages'), $userImageName);
            $blog->userimage = $userImageName;
        }

        $blog->title = $request->input('title');
        $blog->content = $request->input('content');

        // Save the feature image
        if ($request->hasFile('featureimage')) {
            $featureImage = $request->file('featureimage');
            $featureImageName = time() . '_' . $featureImage->getClientOriginalName();
            $featureImage->move(public_path('featureimages'), $featureImageName);
            $blog->featureimage = $featureImageName;
        }

        $subImages = [];
        if ($request->hasFile('subimages')) {
            foreach ($request->file('subimages') as $subImage) {
                $subImageName = $subImage->getClientOriginalName();
                $subImage->move(public_path('subimages'), $subImageName);
                $subImages[] = $subImageName;
            }
        }
        $blog->subimages = json_encode($subImages);

        $blog->title_tag = $request->input('title_tag');
        $blog->meta_description = $request->input('meta_description');

        // Save the blog post
        $blog->save();

        // Optionally, you can redirect the user to a success page
        return redirect()->back()->with('success', 'Bolg Posted successfully!');
}

public function editblog($id)
{

    $blog = Blog::find($id);
    return view('front_admin.editblog', compact('blog'));
}

public function updateblog(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'category' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'title_tag' => 'required|string|max:255',
        'meta_description' => 'required|string|max:255',
    ]);

    // Process the form data and update the blog post in the database
    $blog = \App\Models\Blog::find($id);
    $blog->category = $request->input('category');
    $blog->username = $request->input('username');

    // Update the user image
    if ($request->hasFile('userimage')) {
        $userImage = $request->file('userimage');
        $userImageName = time() . '_' . $userImage->getClientOriginalName();
        $userImage->move(public_path('userimages'), $userImageName);
        $blog->userimage = $userImageName;
    }

    $blog->title = $request->input('title');
    $blog->content = $request->input('content');

    // Update the feature image
    if ($request->hasFile('featureimage')) {
        $featureImage = $request->file('featureimage');
        $featureImageName = time() . '_' . $featureImage->getClientOriginalName();
        $featureImage->move(public_path('featureimages'), $featureImageName);
        $blog->featureimage = $featureImageName;
    }

    $subImages = [];
    if ($request->hasFile('subimages')) {
        foreach ($request->file('subimages') as $subImage) {
            $subImageName = $subImage->getClientOriginalName();
            $subImage->move(public_path('subimages'), $subImageName);
            $subImages[] = $subImageName;
        }
    }
    $blog->subimages = json_encode($subImages);

    $blog->title_tag = $request->input('title_tag');
    $blog->meta_description = $request->input('meta_description');

    // Save the blog post
    $blog->save();

    // Optionally, you can redirect the user to a success page
    return redirect()->back()->with('success', 'Bolg Updated successfully!');
}

public function deleteblog($id)
{
    // Find the blog post by its ID
    $blog = Blog::find($id);

    // Check if the blog post exists
    if (!$blog) {
        return redirect()->back()->with('error', 'Blog post not found.');
    }

    // Perform the delete action
    $blog->delete();

    return redirect()->back()->with('success', 'Blog post deleted successfully.');
}

public function service(){
    $services = Service::all();
    return view('front_admin.service', compact('services'));
}

public function storeservice(Request $request)
{

        // Validate the form data
        $request->validate([
        'serviceTitle' => 'required',
        'slug' => 'required',
        'shortdescription' => 'required',
        'serviceDescription' => 'required',
        'serviceImage' => 'required',
        'sideimage' => 'required',
        ]);

        $service = new \App\Models\Service();
        $service->serviceTitle = $request->input('serviceTitle');
        $service->slug = $request->input('slug');
        $service->shortdescription = $request->input('shortdescription');
        $service->serviceDescription = $request->input('serviceDescription');


        if ($request->hasFile('sideimage')) {
            $sideImage = $request->file('sideimage');
            $sideImageName = time() . '_' . $sideImage->getClientOriginalName();
            $sideImage->move(public_path('sideImages'), $sideImageName);
            $service->sideimage = $sideImageName;
        }

        if ($request->hasFile('serviceImage')) {
            $serviceImage = $request->file('serviceImage');
            $serviceImageName = time() . '_' . $serviceImage->getClientOriginalName();
            $serviceImage->move(public_path('serviceImages'), $serviceImageName);
            $service->serviceImage = $serviceImageName;
        }


        $service->save();
        return redirect()->back()->with('success', 'Bolg Posted successfully!');
}
public function deleteservice($id)
{
    // Find the blog post by its ID
    $service = Service::find($id);

    // Check if the blog post exists
    if (!$service) {
        return redirect()->back()->with('error', 'Blog post not found.');
    }

    // Perform the delete action
    $service->delete();

    return redirect()->back()->with('success', 'Blog post deleted successfully.');
}

public function editservice($id)
{
    $service = Service::find($id);
    return view('front_admin.editservice', compact('service'));
}

public function updateService(Request $request, $id)
{

    // Validate the form data
    $request->validate([
        'serviceTitle' => 'required',
        'slug' => 'required',
        'shortdescription' => 'required',
        'serviceDescription' => 'required',
        'section1title' => 'required',
        'section1description' => 'required',
        'section2title' => 'required',
        'section2description' => 'required',
        'section3title' => 'required',
        'section3description' => 'required',
    ]);

    // Find the service by ID
    $service = \App\Models\Service::find($id);

    if (!$service) {
        return redirect()->back()->with('error', 'Service not found.');
    }

    // Update service properties
    $service->serviceTitle = $request->input('serviceTitle');
    $service->slug = $request->input('slug');
    $service->shortdescription = $request->input('shortdescription');
    $service->serviceDescription = $request->input('serviceDescription');
    $service->section1title = $request->input('section1title');
    $service->section1description = $request->input('section1description');
    $service->section1imagealt = $request->input('section1imagealt');
    $service->section2title = $request->input('section2title');
    $service->section2description = $request->input('section2description');
    $service->section2imagealt = $request->input('section2imagealt');
    $service->section3title = $request->input('section3title');
    $service->section3description = $request->input('section3description');
    $service->section3imagealt = $request->input('section3imagealt');
    

    //section 1 image
    if ($request->hasFile('section1image')) {
        // Delete the old service image (optional)


        // Upload and save the new service image
        $section1image = $request->file('section1image');
        $section1imageName = time() . '_' . $section1image->getClientOriginalName();
        $section1image->move(public_path('section1images'), $section1imageName);
        $service->section1image = $section1imageName;
    }

    //Section 2 image
    if ($request->hasFile('section2image')) {
        // Delete the old service image (optional)


        // Upload and save the new service image
        $section2image = $request->file('section2image');
        $section2imageName = time() . '_' . $section2image->getClientOriginalName();
        $section2image->move(public_path('section2images'), $section2imageName);
        $service->section2image = $section2imageName;
    }

    //Section 3 image
    if ($request->hasFile('section3image')) {
        // Delete the old service image (optional)


        // Upload and save the new service image
        $section3image = $request->file('section3image');
        $section3imageName = time() . '_' . $section3image->getClientOriginalName();
        $section3image->move(public_path('section3images'), $section3imageName);
        $service->section3image = $section3imageName;
    }

    // Check if a new service image is uploaded
    if ($request->hasFile('serviceImage')) {
        // Delete the old service image (optional)
        if (file_exists(public_path('serviceImages/' . $service->serviceImage))) {
            unlink(public_path('serviceImages/' . $service->serviceImage));
        }

        // Upload and save the new service image
        $serviceImage = $request->file('serviceImage');
        $serviceImageName = time() . '_' . $serviceImage->getClientOriginalName();
        $serviceImage->move(public_path('serviceImages'), $serviceImageName);
        $service->serviceImage = $serviceImageName;
    }

    if ($request->hasFile('sideimage')) {
        // Delete the old service image (optional)


        // Upload and save the new service image
        $sideimage = $request->file('sideimage');
        $sideImageName = time() . '_' . $sideimage->getClientOriginalName();
        $sideimage->move(public_path('sideImages'), $sideImageName);
        $service->sideimage = $sideImageName;
    }

    // Save the updated service
    $service->save();

    return redirect('frontservice')->with('success', 'Service updated successfully!');

}

}
