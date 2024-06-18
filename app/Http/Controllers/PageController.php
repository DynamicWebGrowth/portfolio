<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Qualification;
use App\Models\Review;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\User;
use App\Components\UserDataComponent;


class PageController extends Controller
{
    // Method to handle rendering views with settings
    protected function renderPage($viewName)
    {
        $data = UserDataComponent::getData();

        // Extract specific elements from $data
         $user = $data['user'] ?? null;
         $experiences = $data['experiences'] ?? [];
         $educations = $data['educations'] ?? [];
         $skills = $data['skills'] ?? [];
         $services = $data['services'] ?? [];
         $categories = $data['categories'] ?? [];
         $portfolios = $data['portfolios'] ?? [];
         $setting = $data['setting'] ?? null;
         $reviewers = $data['reviewers'] ?? [];
 
        // Pass extracted variables to the view
        return view("pages.$viewName", compact('user', 'experiences', 'educations', 'skills',
                                     'services', 'categories', 'portfolios', 'setting', 'reviewers'));
    }

    public function privacy()
    {
        return $this->renderPage('privacy');
    }

    public function terms()
    {
        return $this->renderPage('terms');
    }

    public function faqs()
    {
        return $this->renderPage('faqs');
    }

    public function help()
    {
        return $this->renderPage('help');
    }
}
