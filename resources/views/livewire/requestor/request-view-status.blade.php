<div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Your Request Information
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Receiver
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $request->receivername }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Status
          </dt>
          <dd class="mt-1 text-sm  sm:mt-0 sm:col-span-2">
              @if ($request->status=="Approved")
              <span class="px-2 py-1 rounded-md bg-green-100 text-green-700 ring-1 ring-green-700">{{ $request->status }}</span>
              @endif
              @if ($request->status=="Pending")
              <span class="px-2 py-1 rounded-md bg-yellow-100 text-yellow-700 ring-1 ring-yellow-700">{{ $request->status }}</span>
              @endif
              @if ($request->status=="Ready To Claim")
              <span class="px-2 py-1 rounded-md bg-green-700 text-white">{{ $request->status }}</span>
              @endif
              @if ($request->status=="Claimed")
              <span class="px-2 py-1 rounded-md bg-gray-700 text-white">{{ $request->status }}</span>
              @endif
              @if ($request->status=="Payment Review")
              <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-700 ring-1 ring-blue-700">Your proof of payment is being reviewed</span>
              @endif
          </dd>
        </div>
   
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Request Document/s
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <div class="flex flex-wrap gap-2">
            
                @foreach ($request->documents as $document)
                <div class="flex space-x-2 items-center">
                    <i class="fa fa-folder text-indigo-600"></i>
                    <span>{{ $document->name }}</span>
                </div>
                @endforeach
               
            </div>
            
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Total amount
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            &#8369; {{ $amount }}
          </dd>
        </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Response
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $request->response }}
          </dd>
        </div>
        

        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Retrieval Date
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $request->retrievaldate }}
          </dd>
        </div>
        
        <div class="w-full h-1 bg-indigo-600">
        </div>
      </dl>
    </div>
  </div>


 @if ($request->status=="Approved")
  <div>
    <div class="mt-3 bg-white rounded-md w-full shadow p-3 md:p-5 grid">
      <div class="p-2 flex items-center space-x-2">
        <i class="fa fa-check-circle text-green-600"></i>
        <span>Your request has been approved.</span>
      </div>
    

    <!-- This example requires Tailwind CSS v2.0+ -->
              <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Document
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Amount
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                          @foreach ($request->documents as $document)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $document->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              &#8369;   {{ $document->amount }}
                            </td>
                          
                          </tr>
              
                          @endforeach
                        
                        </tbody>
                        <tfoot class="bg-indigo-100 divide-y divide-gray-200">
                          <tr class="px-6">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                              Total
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-500">
                              <span>&#8369; {{ $amount }}</span>
                            </td>
                          </tr>
                        </tfoot>
                      
                      </table> 
                    </div>

                  </div>
                </div>
              </div>

          </div>
          
        </div>
 
       
        <div class="bg-white rounded-md shadow w-full mt-5 p-3">
          <div class="w-full p-2">
              <span class="text-center">UPLOAD YOUR PROOF OF PAYMENT</span>
          </div>
        <form>
          @csrf

        
          <div class="grid space-y-3">
            @if ($proof_of_payment)
            <img src="{{ $proof_of_payment->temporaryUrl()}}" class="h-60 shadow-md mx-autos" alt="">
            @endif
          </div>
          <div class="mt-2">
            <input type="file" wire:model="proof_of_payment">  
            @error('proof_of_payment')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
          </div>

          <div class="mt-2 p-2 space-y-2">
<hr>

            <button wire:click.prevent="create({{ $request->id }})" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </form>
      
      </div>
        @endif
     

</div>


