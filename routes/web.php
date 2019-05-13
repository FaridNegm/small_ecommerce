<?php

use Illuminate\Support\Facades\Auth;

// Start Admin Routes
Route::get('locale/{lang}', function($lang){
    Session::put('locale' , $lang);
    return redirect()->back();
});

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'] , function (){

    Route::get('dashboard' , 'homeController@index');

    // Users Routes
    Route::get('user' , 'AllUserController@index');
    Route::get('/add_user' , 'AllUserController@create');
    Route::post('/add_user' , 'AllUserController@store');
    Route::get('{id}/edit_user' , 'AllUserController@edit');
    Route::post('edit_user/{id}' , 'AllUserController@update');
    Route::get('{id}/delete_user' , 'AllUserController@destroy');

    // About Us Routes
    Route::get('about_us' , 'AboutController@index');
    Route::get('/add_about_us' , 'AboutController@create');
    Route::post('/add_about_us' , 'AboutController@store');
    Route::get('{id}/edit_about' , 'AboutController@edit');
    Route::post('edit_about/{id}' , 'AboutController@update');
    Route::get('{id}/delete_about' , 'AboutController@destroy');

    // News Routes
    Route::get('news' , 'NewsController@index');
    Route::get('/add_news' , 'NewsController@create');
    Route::post('/add_news' , 'NewsController@store');
    Route::get('{id}/edit_news' , 'NewsController@edit');
    Route::post('edit_news/{id}' , 'NewsController@update');
    Route::get('{id}/delete_news' , 'NewsController@destroy');

    // Ameen Routes
    Route::get('ameen' , 'AmeenController@index');
    Route::get('/add_ameen' , 'AmeenController@create');
    Route::post('/add_ameen' , 'AmeenController@store');
    Route::get('{id}/edit_ameen' , 'AmeenController@edit');
    Route::post('edit_ameen/{id}' , 'AmeenController@update');
    Route::get('{id}/delete_ameen' , 'AmeenController@destroy');

    // Ameen Comments Routes
    Route::get('ameen_comments' , 'AmeenCommentsController@index');
    Route::get('/add_ameen_comments' , 'AmeenCommentsController@create');
    Route::post('/add_ameen_comments' , 'AmeenCommentsController@store');
    Route::get('{id}/edit_ameen_comments' , 'AmeenCommentsController@edit');
    Route::post('edit_ameen_comments/{id}' , 'AmeenCommentsController@update');
    Route::get('{id}/delete_ameen_comments' , 'AmeenCommentsController@destroy');

    // Prince Routes
    Route::get('prince' , 'PrinceController@index');
    Route::get('/add_prince' , 'PrinceController@create');
    Route::post('/add_prince' , 'PrinceController@store');
    Route::get('{id}/edit_prince' , 'PrinceController@edit');
    Route::post('edit_prince/{id}' , 'PrinceController@update');
    Route::get('{id}/delete_prince' , 'PrinceController@destroy');

    // Prince Comments Routes
    Route::get('prince_comments' , 'PrinceCommentsController@index');
    Route::get('/add_prince_comments' , 'PrinceCommentsController@create');
    Route::post('/add_prince_comments' , 'PrinceCommentsController@store');
    Route::get('{id}/edit_prince_comments' , 'PrinceCommentsController@edit');
    Route::post('edit_prince_comments/{id}' , 'PrinceCommentsController@update');
    Route::get('{id}/delete_prince_comments' , 'PrinceCommentsController@destroy');

    // Honest Routes
    Route::get('honest' , 'HonestController@index');
    Route::get('/add_honest' , 'HonestController@create');
    Route::post('/add_honest' , 'HonestController@store');
    Route::get('{id}/edit_honest' , 'HonestController@edit');
    Route::post('edit_honest/{id}' , 'HonestController@update');
    Route::get('{id}/delete_honest' , 'HonestController@destroy');

    // Honest Comments Routes
    Route::get('honest_comments' , 'HonestCommentsController@index');
    Route::get('/add_honest_comments' , 'HonestCommentsController@create');
    Route::post('/add_honest_comments' , 'HonestCommentsController@store');
    Route::get('{id}/edit_honest_comments' , 'HonestCommentsController@edit');
    Route::post('edit_honest_comments/{id}' , 'HonestCommentsController@update');
    Route::get('{id}/delete_honest_comments' , 'HonestCommentsController@destroy');

    // gayza Routes
    Route::get('gayza' , 'GayzaController@index');
    Route::get('/add_gayza' , 'GayzaController@create');
    Route::post('/add_gayza' , 'GayzaController@store');
    Route::get('{id}/edit_gayza' , 'GayzaController@edit');
    Route::post('edit_gayza/{id}' , 'GayzaController@update');
    Route::get('{id}/delete_gayza' , 'GayzaController@destroy');

    // gayza Comments Routes
    Route::get('gayza_comments' , 'GayzaCommentsController@index');
    Route::get('/add_gayza_comments' , 'GayzaCommentsController@create');
    Route::post('/add_gayza_comments' , 'GayzaCommentsController@store');
    Route::get('{id}/edit_gayza_comments' , 'GayzaCommentsController@edit');
    Route::post('edit_gayza_comments/{id}' , 'GayzaCommentsController@update');
    Route::get('{id}/delete_gayza_comments' , 'GayzaCommentsController@destroy');

    // gate Routes
    Route::get('gate' , 'GateController@index');
    Route::get('/add_gate' , 'GateController@create');
    Route::post('/add_gate' , 'GateController@store');
    Route::get('{id}/edit_gate' , 'GateController@edit');
    Route::post('edit_gate/{id}' , 'GateController@update');
    Route::get('{id}/delete_gate' , 'GateController@destroy');

    // gate Comments Routes
    Route::get('gate_comments' , 'GateCommentsController@index');
    Route::get('/add_gate_comments' , 'GateCommentsController@create');
    Route::post('/add_gate_comments' , 'GateCommentsController@store');
    Route::get('{id}/edit_gate_comments' , 'GateCommentsController@edit');
    Route::post('edit_gate_comments/{id}' , 'GateCommentsController@update');
    Route::get('{id}/delete_gate_comments' , 'GateCommentsController@destroy');

    // calends Routes
    Route::get('calends' , 'CalendsController@index');
    Route::get('/add_calends' , 'CalendsController@create');
    Route::post('/add_calends' , 'CalendsController@store');
    Route::get('{id}/edit_calends' , 'CalendsController@edit');
    Route::post('edit_calends/{id}' , 'CalendsController@update');
    Route::get('{id}/delete_calends' , 'CalendsController@destroy');

    // gardens Routes
    Route::get('gardens' , 'GardensController@index');
    Route::get('/add_gardens' , 'GardensController@create');
    Route::post('/add_gardens' , 'GardensController@store');
    Route::get('{id}/edit_gardens' , 'GardensController@edit');
    Route::post('edit_gardens/{id}' , 'GardensController@update');
    Route::get('{id}/delete_gardens' , 'GardensController@destroy');

    // news_nav Routes
    Route::get('news_nav' , 'NewsNavbarController@index');
    Route::get('/add_news_nav' , 'NewsNavbarController@create');
    Route::post('/add_news_nav' , 'NewsNavbarController@store');
    Route::get('{id}/edit_news_nav' , 'NewsNavbarController@edit');
    Route::post('edit_news_nav/{id}' , 'NewsNavbarController@update');
    Route::get('{id}/delete_news_nav' , 'NewsNavbarController@destroy');

    // amana_advertisment Routes
    Route::get('amana_advertisment' , 'AmanaAdvertismentController@index');
    Route::get('/add_amana_advertisment' , 'AmanaAdvertismentController@create');
    Route::post('/add_amana_advertisment' , 'AmanaAdvertismentController@store');
    Route::get('{id}/edit_amana_advertisment' , 'AmanaAdvertismentController@edit');
    Route::post('edit_amana_advertisment/{id}' , 'AmanaAdvertismentController@update');
    Route::get('{id}/delete_amana_advertisment' , 'AmanaAdvertismentController@destroy');

    // articles Routes
    Route::get('articles' , 'ArticlesController@index');
    Route::get('/add_articles' , 'ArticlesController@create');
    Route::post('/add_articles' , 'ArticlesController@store');
    Route::get('{id}/edit_articles' , 'ArticlesController@edit');
    Route::post('edit_articles/{id}' , 'ArticlesController@update');
    Route::get('{id}/delete_articles' , 'ArticlesController@destroy');

    // investment_opportunity Routes
    Route::get('investment_opportunity' , 'InvestmentOpportunityController@index');
    Route::get('/add_investment_opportunity' , 'InvestmentOpportunityController@create');
    Route::post('/add_investment_opportunity' , 'InvestmentOpportunityController@store');
    Route::get('{id}/edit_investment_opportunity' , 'InvestmentOpportunityController@edit');
    Route::post('edit_investment_opportunity/{id}' , 'InvestmentOpportunityController@update');
    Route::get('{id}/delete_investment_opportunity' , 'InvestmentOpportunityController@destroy');

    // challengs Routes
    Route::get('challengs' , 'ChallengsController@index');
    Route::get('/add_challengs' , 'ChallengsController@create');
    Route::post('/add_challengs' , 'ChallengsController@store');
    Route::get('{id}/edit_challengs' , 'ChallengsController@edit');
    Route::post('edit_challengs/{id}' , 'ChallengsController@update');
    Route::get('{id}/delete_challengs' , 'ChallengsController@destroy');

    // sub_sites Routes
    Route::get('sub_sites' , 'SubSitesController@index');
    Route::get('/add_sub_sites' , 'SubSitesController@create');
    Route::post('/add_sub_sites' , 'SubSitesController@store');
    Route::get('{id}/edit_sub_sites' , 'SubSitesController@edit');
    Route::post('edit_sub_sites/{id}' , 'SubSitesController@update');
    Route::get('{id}/delete_sub_sites' , 'SubSitesController@destroy');

    // amana_mangement Routes
    Route::get('amana_mangement' , 'AmanaMangementController@index');
    Route::get('/add_amana_mangement' , 'AmanaMangementController@create');
    Route::post('/add_amana_mangement' , 'AmanaMangementController@store');
    Route::get('{id}/edit_amana_mangement' , 'AmanaMangementController@edit');
    Route::post('edit_amana_mangement/{id}' , 'AmanaMangementController@update');
    Route::get('{id}/delete_amana_mangement' , 'AmanaMangementController@destroy');

    // amana_municipality Routes
    Route::get('amana_municipality' , 'AmanaMunicipalityController@index');
    Route::get('/add_amana_municipality' , 'AmanaMunicipalityController@create');
    Route::post('/add_amana_municipality' , 'AmanaMunicipalityController@store');
    Route::get('{id}/edit_amana_municipality' , 'AmanaMunicipalityController@edit');
    Route::post('edit_amana_municipality/{id}' , 'AmanaMunicipalityController@update');
    Route::get('{id}/delete_amana_municipality' , 'AmanaMunicipalityController@destroy');

    // Services Routes
    Route::get('services' , 'ServiceController@index');
    Route::get('/add_services' , 'ServiceController@create');
    Route::post('/add_services' , 'ServiceController@store');
    Route::get('{id}/edit_services' , 'ServiceController@edit');
    Route::post('edit_services/{id}' , 'ServiceController@update');
    Route::get('{id}/delete_services' , 'ServiceController@destroy');

    // Estimate Routes
    Route::get('estimate' , 'EstimateAppController@index');
    Route::get('/add_estimate' , 'EstimateAppController@create');
    Route::post('/add_estimate' , 'EstimateAppController@store');
    Route::get('{id}/edit_estimate' , 'EstimateAppController@edit');
    Route::post('edit_estimate/{id}' , 'EstimateAppController@update');
    Route::get('{id}/delete_estimate' , 'EstimateAppController@destroy');

    Route::get('all_user_estimate' , 'EstimateAppController@all_user_estimate');
    Route::get('{id}/delete_all_user_estimate' , 'EstimateAppController@all_user_estimate_destroy');

    // Team Routes
    Route::get('team' , 'TeamController@index');
    Route::get('/add_team' , 'TeamController@create');
    Route::post('/add_team' , 'TeamController@store');
    Route::get('{id}/edit_team' , 'TeamController@edit');
    Route::post('edit_team/{id}' , 'TeamController@update');
    Route::get('{id}/delete_team' , 'TeamController@destroy');

    // Partner Routes
    Route::get('partner' , 'PartnerController@index');
    Route::get('/add_partner' , 'PartnerController@create');
    Route::post('/add_partner' , 'PartnerController@store');
    Route::get('{id}/edit_partner' , 'PartnerController@edit');
    Route::post('edit_partner/{id}' , 'PartnerController@update');
    Route::get('{id}/delete_partner' , 'PartnerController@destroy');

    // Blog Routes
    Route::get('blog' , 'BlogController@index');
    Route::get('/add_blog' , 'BlogController@create');
    Route::post('/add_blog' , 'BlogController@store');
    Route::get('{id}/edit_blog' , 'BlogController@edit');
    Route::post('edit_blog/{id}' , 'BlogController@update');
    Route::get('{id}/delete_blog' , 'BlogController@destroy');

    // Slider Routes
    Route::get('slider' , 'SliderController@index');
    Route::get('/add_slider' , 'SliderController@create');
    Route::post('/add_slider' , 'SliderController@store');
    Route::get('{id}/edit_slider' , 'SliderController@edit');
    Route::post('edit_slider/{id}' , 'SliderController@update');
    Route::get('{id}/delete_slider' , 'SliderController@destroy');

    // Job Routes
    Route::get('job' , 'JobController@index');
    Route::get('/add_job' , 'JobController@create');
    Route::post('/add_job' , 'JobController@store');
    Route::get('{id}/edit_job' , 'JobController@edit');
    Route::post('edit_job/{id}' , 'JobController@update');
    Route::get('{id}/delete_job' , 'JobController@destroy');

    // Portfolio Routes
    Route::get('portfolio' , 'PortfolioController@index');
    Route::get('/add_portfolio' , 'PortfolioController@create');
    Route::post('/add_portfolio' , 'PortfolioController@store');
    Route::get('{id}/edit_portfolio' , 'PortfolioController@edit');
    Route::post('edit_portfolio/{id}' , 'PortfolioController@update');
    Route::get('{id}/delete_portfolio' , 'PortfolioController@destroy');

    // Setting Routes
    Route::get('setting' , 'SettingController@index');
    Route::get('/add_setting' , 'SettingController@create');
    Route::post('/add_setting' , 'SettingController@store');
    Route::get('{id}/edit_setting' , 'SettingController@edit');
    Route::post('edit_setting/{id}' , 'SettingController@update');
    Route::get('{id}/delete_setting' , 'SettingController@destroy');

    // Messages Routes
    Route::get('message' , 'ContactFormController@index');
    Route::post('message' , 'ContactFormController@store');
    Route::get('show_message/{id}' , 'ContactFormController@show');
    Route::get('{id}/delete_message' , 'ContactFormController@destroy');

    Route::post('login' , 'AuthorizedController@check_login');

    Route::get('emails' , 'EmailFollowController@index');

});
    Route::get('admin/login', 'Admin\AuthorizedController@login');
    Route::get('not_authorized', 'Admin\AuthorizedController@not_authorized');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


// Website Routes

Route::group(['namespace' => 'Site'] , function () {
    Route::get('/', 'SiteController@index');
    Route::get('princes', 'SiteController@princes');
    Route::get('prince/{id}', 'SiteController@prince_details');
    Route::get('gayza', 'SiteController@gayza');
    Route::get('gayza/{id}', 'SiteController@gayza_details');
    Route::get('gate', 'SiteController@gate');
    Route::get('gate/{id}', 'SiteController@gate_details');
    Route::get('ameen', 'SiteController@ameen');
    Route::get('ameen/{id}', 'SiteController@ameen_details');
    Route::get('amana', 'SiteController@amana');

    Route::get('news', 'SiteController@news');
    Route::get('news/{id}', 'SiteController@news_details');

    Route::get('articles', 'SiteController@articles');
    Route::get('articles/{id}', 'SiteController@articles_details');

    Route::get('advertisment', 'SiteController@advertisment');
    Route::get('advertisment/{id}', 'SiteController@advertisment_details');

    Route::get('investment', 'SiteController@investment');
    Route::get('investment/{id}', 'SiteController@investment_details');

    Route::get('challengs', 'SiteController@challengs');
    Route::get('challengs/{id}', 'SiteController@challengs_details');

    Route::get('calends', 'SiteController@calends');
    Route::get('gardens', 'SiteController@gardens');
    Route::get('sub_sites', 'SiteController@sub_sites');

    Route::get('contact', 'SiteController@contact');
    Route::post('contact/store', 'SiteController@store');

    // Route::get('about', 'SiteController@about');
    // Route::get('blog', 'SiteController@blog');
    // Route::get('jobs', 'SiteController@jobs');
    // Route::get('blog/{id}', 'SiteController@blog_details');
    // Route::get('job_details/{id}', 'SiteController@job_details');
    // Route::get('services', 'SiteController@services');
    // Route::get('portfolio', 'SiteController@portfolio');
    // Route::get('contact', 'SiteController@contact');

});


Route::get('/', function(){
    return view('welcome');
});
