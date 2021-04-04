@foreach ($jobCat as $job)
<li class="dropdown menu-item">
    <a href="/jobCat/{{$job->id}}" >{{$job->job_category}}</a>
</li><!-- /.menu-item -->
@endforeach

