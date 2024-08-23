 @if (Auth::user()->role === 'HOD')
     <x-hod-dashboard />
 @elseif (Auth::user()->role === 'faculty')
     <x-faculty-dashboard />
 @elseif (Auth::user()->role === 'student')
     <x-student-dashboard />
 @else
     <p>You do not have access to any dashboard.</p>
 @endif
