<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('logs');
    }

    public function logs()
    {
        $sites = DB::table('sites')->orderBy('val', 'asc')->get();
        return view('home.logs', ['sites' => $sites]);
    }

    public function frame()
    {
        if($_GET['topic'] === 'empty')
        {
            return 'Select a website to begin';
        }
        else if($_GET['topic'] === 'logs')
        {
            $log_path = DB::table('log_files')->where(['source' => $_GET['source']])->pluck('path');
            $log = File::get($log_path[0]);
            dd($log);
        }
        else if($_GET['topic'] === 'clearlogs')
        {
            $log_path = DB::table('log_files')->where(['source' => $_GET['source']])->pluck('path');
            unlink($log_path[0]);
            File::put($log_path[0], '');
            chmod($log_path[0], 0777);
            return 'Log files cleared';
        }
    }
}
