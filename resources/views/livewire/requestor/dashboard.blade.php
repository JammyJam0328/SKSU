<div class="bg-gray-50 rounded-md shadow-lg p-5">
    <div class="py-5 px-3 flex space-x-3 items-center">
      <i class="fa fa-paper-plane text-indigo-600 text-4xl"></i>
      <h1 class="text-gray-700 text-3xl">Request</h1>

    </div>
   <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-md">
    <ul class="divide-y-4 divide-gray-200">

    @forelse ($requests->sortByDesc('created_at') as $request)
    <li>
      <a href="{{ route('requestor-requestviewstatus', ['id' => $request->id]) }}" class="block hover:bg-gray-50 ">
        <div class="px-4 py-4 sm:px-6">
          <div class="flex items-center justify-between">
            <p class="text-xl flex font-medium text-indigo-600 truncate space-x-2 items-center">
              <i class="fa fa-folder"></i>
              <span>Request</span>
            </p>
            <div class="ml-2 flex-shrink-0 flex">
              @if ($request->status=="Approved")
              <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $request->status }}
              </p>
              @endif

              @if ($request->status=="Payment Review")
              <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-600 text-white">
                {{ $request->status }}
              </p>
              @endif

              @if ($request->status=="Ready To Claim")
              <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-white">
                {{ $request->status }}
              </p>
              @endif

              @if ($request->status=="Pending")
              <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-600">
                {{ $request->status }}
              </p>
              @endif

              
              @if ($request->status=="Denied")
              <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-600">
                {{ $request->status }}
              </p>
              @endif
            
            
            </div>
          </div>
          <div class="mt-2 sm:flex sm:justify-between px-5">
            <div class="grid grid-cols-1 gap-2 sm:gap-2  sm:grid-cols-2 lg:grid-cols-4">

              @foreach ($request->documents as $item)
              <p class="flex  items-center text-sm text-gray-500 space-x-2">
                <!-- Heroicon name: solid/users -->
               <i class="fa fa-folder-open"></i>
                <span>{{ $item->name }}</span>
              </p>
              @endforeach

             
            </div>




            <div class="mt-2 flex items-center text-sm text-gray-500 w-40 sm:mt-0">
              <!-- Heroicon name: solid/calendar -->
              <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
              </svg>
              <p>
                
                <time >{{date('M d, Y', strtotime($request->created_at))}}</time>
              </p>
            </div>
          </div>
        </div>
      </a>
    </li>
    @empty
        <div class="grid justify-center items-center p-10">
            <span class="text-3xl text-gray-800 text-center uppercase">No request found</span>
          <img src="{{ asset('images/empty.svg') }}" class="h-80 w-80" alt="Empty">
        </div>
    @endforelse

    
  
    </ul>
  </div>
  
</div>
