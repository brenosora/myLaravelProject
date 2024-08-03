<h2>
    {{$job->title}}
</h2>

<p>
    your job was just posted on the website
</p>

<p>
    <a href="{{url('/jobs/'. $job->id)}}">View your Job</a>
     
</p>