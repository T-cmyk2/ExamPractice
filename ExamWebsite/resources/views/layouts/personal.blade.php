
<!--Creating some sections-->

@section("profileInfo")

<!--Profile Picture-->
<div class="d-inline-flex align-items-center bg-body shadow-lg p-1 bg-body rounded justify-content-end">

        <div class="dropdown">
            <a class="lead mx-3 text-center nav-link dropdown-toggle text-secondary" id="navbarDropdown" data-bs-toggle="dropdown" style="cursor: pointer; user-select: none; text-decoration: none;">{{$user->fullName}}</a>
            <div class="dropdown-menu slideIn">
                <div class="d-flex flex-column align-items-center">
                    <span class="lead">@if($user->isTeacher)Teacher @else Student @endif</span>
                    @if(!$user->isTeacher)
                        <span class="text-primary">{{$leaderboard->getPoints()}} <span class="text-dark">points</span></span>
                        <span><span class="text-primary">{{count($tasks)}}</span> Tasks due</span>
                    @endif
                        <button class="btn btn-secondary btn-sm my-1" data-redir-loc="logout.php">Logout</button>

                    <span>
                </div>
            </div>
        </div>
    <div class="border rounded shadow shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-fill py-2 text-muted border border-light bg-body" style="cursor: pointer; user-select: none; text-decoration: none;" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
    </div>
</div>


@endsection

@section("taskEntry")



@endsection









<!--Layout Begin-->

<!DOCTYPE html>
<html>
    <head>
        <title>GibJohn Tutoring - @yield('title')</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        @if($user->isTeacher)
            <script src="scripts/general_teacher.js"></script>
        @else
            <script src="scripts/general_student.js"></script>
        @endif

 

        <!--Some scripts are in the head so that page transitions are smooth-->
        <style>
            body {
                background: rgb(80,113,255);
                background: linear-gradient(145deg, rgba(80,113,255,1) 7%, rgba(78,4,237,1) 27%, rgba(152,14,210,1) 100%);
                font-family: 'Fredoka' !important;
                height: 100vh;
                background-attachment: fixed;
            }

            li {
                cursor: pointer; 
                user-select: none;
            }

            @keyframes slideIn {
            0% {
                transform: translateY(0rem);
                opacity: 0;
            }
            100% {
                transform: translateY(1rem);
                opacity: 1;
            }
            }

            .slideIn {
                animation-name: slideIn;
                animation-duration: 0.4s;
                animation-fill-mode: both;
            }

            @keyframes itemHover {
                0% {
                    box-shadow: 0px 0px 14px 2px rgba(0,0,0,0);
                }
                50% {
                    box-shadow: 0px 0px 14px 2px rgba(0,0,0,0.15);
                }
            }

            .item-box:hover {
                animation: itemHover 0.2s;
                box-shadow: 0px 0px 14px 2px rgba(0,0,0,0.15);
                cursor: pointer;
                user-select: none;
            }

        </style>
    </head>
    <body class="text-light">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-3 lead @if($page=="dashboard") active @endif" data-redir-loc="/">Dashboard</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link px-3 lead @if($page=="tasks") active @endif"  data-redir-loc="tasks.php">Tasks</a>
                        </li>-->
                    </ul>
                    <div class="d-inline-flex flex-column">




                        @yield("profileInfo")
                        



                    </div>
                </div>
            </div>
            
        </nav>


        <div class="allContent text-light h-75">
            <div class="content mt-3 h-100">
                @yield('content')
            </div>


        </div>

        <!--Scripts-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&display=swap" rel="stylesheet">
    </body>
</html>