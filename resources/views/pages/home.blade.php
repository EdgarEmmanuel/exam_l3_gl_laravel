@extends('layout.admin_layout')


@section("main")

<section class="panel important">
    <h2>Write Some News</h2>
    <ul>
      <li>Information Panel</li>
    </ul>
  </section>
  
  <section class="panel important">
    <h2>Write a post</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="twothirds">
          Blog title:<br/>
          <input type="text" name="title" size="40"/><br/><br/>
          Content:<br/>    
          <textarea name="newstext" rows="15" cols="67"></textarea><br/>  
        </div>
        <div>
          <input type="submit" name="submit" value="Save" />
        </div>
        </div>
      </form>
  </section>


@endsection