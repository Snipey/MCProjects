<?php

    namespace App\Http\Controllers;

    use App\Models\Project;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use App\User;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Auth;


    class ProjectController extends Controller
    {

        public function __construct()
        {
            $this->middleware('auth', ['except' => ['index', 'show']]);
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            $posts = Project::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('projects.posts_per_page'));

            return view('project.index', compact('posts'));

        }

        /**
         * View Project
         * @return Response
         */
        public function show($slug)
        {
            $post = Project::whereSlug($slug)->firstOrFail();

            $photo = Project::where('slug', '=', $slug);


            return view('project.view', ['post' => $post]);
        }

        /**
         * Create Project
         * @return Response
         */
        public function create()
        {
            return view('project.create');
        }

        /**
         * Save Project
         * @return Response
         */
        public function store(Requests\ProjectRequest $request)
        {

            Project::create([
                'title'   => $request->title,
                'content' => $request->projectcontent,
                'user_id' => Auth::user()->id,

                'created_at' => Carbon::now(),
                'published_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            redirect('/');
        }

        public function edit($slug)
        {
            $project = Project::where('slug', '=', $slug)->firstOrFail();
            return view('project.edit', ['project' => $project]);
        }

        public function addPhoto($slug, Request $request)
        {
            $file = $request->file('file');

            $name = time() . $file->getClientOriginalName();

            $file->move('photos/projects', $name);

            $project = Project::where('slug', '=', $slug)->firstOrFail();

            $project->photos()->create(['path' => "/photos/projects/{$name}"]);
        }
    }
