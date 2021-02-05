<h3>simole login sysyem in laravel</h3>


@if(isset(Auth::user()->email))
<div>
	<strong>welcom {{ Auth:: user()->email }}</strong>
	<br>
	<a href="{{('/main/logout') }}">Logout</a>

</div>


else
<script>window.location = "/main";</script>
@endif