
<nav class="navbar navbar-expand-lg mb-2" style="background-color: #FFCC66;">
        <a href="" class="navbar-brand text-dark" style="font-weight: bolder;">Unimu</a>
        <button class="navbar-toggler border-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse menus" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto list">
               <li><a href="{{ url('/') }}" class="nav-link text-dark p-2 m-2">HOME</a></li>
               <li><a href="{{ route('show.list') }}" class="nav-link text-dark p-2 m-2">ANIME LIST</a></li>
               <li><a href="{{ route('list.genre') }}" class="nav-link text-dark p-2 m-2">GENRE</a></li>
               <li><a href="{{ route('show.jadwal') }}" class="nav-link text-dark p-2 m-2">JADWAL</a></li>
            </ul>
            <ul class="navbar-nav ml-auto s-box">
                <form action="{{ route('s.text') }}" method="POST">
                    @csrf
                	<div class="input-group">
                		<input type="text" name="s" class="form-control in" placeholder="Search..." required>
                		<button class="btn btn-light btn-sm" style="border-radius: 0px 3px 3px 0px;"><i class="fa fa-search"></i></button>
                	</div>
                </form>
            </ul>

        </div>
</nav>