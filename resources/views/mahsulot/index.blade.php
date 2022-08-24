@extends('layout')
@section('content')
    
<div class="overflow-x-auto relative m-10">
{{-- <section class="tezkor flex">

    <div id="alert-additional-content-1" class="m-4 p-4 mb-4 border border-blue-300 rounded-lg bg-blue-50 dark:bg-blue-300 w-full" role="alert">
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-5 h-5 mr-2 text-blue-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Malumot</span>
          <h3 class="text-lg font-medium text-blue-900"></h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-blue-900">
          More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
        </div>
        <div class="flex">
          <button type="button" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-blue-800 dark:hover:bg-blue-900">
            <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
            View more
          </button>
          <button type="button" class="text-blue-900 bg-transparent border border-blue-900 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-blue-800 dark:text-blue-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
            Dismiss
          </button>
        </div>
    </div>
    <div id="alert-additional-content-2" class="m-4 p-4 mb-4 border border-red-300 rounded-lg bg-red-50 dark:bg-red-200 w-full" role="alert">
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-5 h-5 mr-2 text-red-900 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Info</span>
          <h3 class="text-lg font-medium text-red-900 dark:text-red-800">This is a danger alert</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-red-900 dark:text-red-800">
          More info about this info danger goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
        </div>
        <div class="flex">
          <button type="button" class="text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-red-800 dark:hover:bg-red-900">
            <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
            View more
          </button>
          <button type="button" class="text-red-900 bg-transparent border border-red-900 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-red-800 dark:text-red-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
            Dismiss
          </button>
        </div>
    </div>
</section> --}}

<section class="search_con">

<form class="flex items-center mb-5  ">   
    <label for="simple-search" class="sr-only">Qidiruv</label>
    <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text"  id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white-500 focus:border-white-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white :focus:ring-blue-500 dark::border-blue-500" placeholder="Search" required="">
    </div>
    <button type="submit" id="search-btn" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Qidiruv</span>
    </button>
</form>
</section>

<section class="datas ">
    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead id="thead" class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    miqdor
                </th>
                <th scope="col" class="py-3 px-6">
                     narx
                </th>
                <th scope="col" class="py-3 px-6">
                    sotish narxi
                </th>
                <th scope="col" class="py-3 px-6">
                    <a href="#" class="  w-full  text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mahsulot qo'shish </a>
                </th>
            </tr>
        </thead>
        <tbody id="tbody">
            @forelse ($mahsulotlar as $mahsulotlar)
                <tr class="bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $mahsulotlar->name }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $mahsulotlar->amount }}
                    </td>
                    <td class="py-4 px-6">
                        {{$mahsulotlar->original_price}}
                    </td>
                    <td class="py-4 px-6">
                        {{$mahsulotlar->sale_price}}
                    </td>
                    <td class="py-4 px-6">

                   
                        <form action="{{route('mahsulot.destroy', ['mahsulot'=>$mahsulotlar->id] )}}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button id="delbtn" type="submit" class="inline w-full md:w-auto text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                                o'chirish
                            </button>
                        </form>  

                         <button class="inline w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="large-modal">
                               Ko'proq ko'rish
                        </button>
                        <!-- Large Modal -->
                        <div id="large-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                    
                                    <form action="{{route('mahsulot.update',['mahsulot'=>$mahsulotlar->id])}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <label for="fish" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism familiya</label>
                                            <input value="{{$mahsulotlar->name}}" type="text" id="fish" name="fish" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism" required>
                                        </div>
                                        <div>
                                            <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon nomer</label>
                                            <input value="{{$mahsulotlar->amount}}" type="text" id="phone1" name="phone1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel 1" required>
                                        </div>
                                        <div>
                                            <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon nomer</label>
                                            <input value="{{$mahsulotlar->original_price}}" type="text" id="phone1" name="phone1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel 1" required>
                                        </div>
                                        <div>
                                            <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon nomer</label>
                                            <input disabled value="{{$mahsulotlar->sale_price}}" type="text" id="phone1" name="phone1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel 1" required>
                                        </div>
                                        <div>
                                            <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon nomer</label>
                                            <input  value="{{$mahsulotlar->deadLine}}" type="date" id="phone1" name="phone1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel 1" required>
                                        </div>
                                        <div>
                                            <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon nomer</label>
                                            <input disabled  value="{{$mahsulotlar->postedBy}}" type="text" id="phone1" name="phone1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel 1" required>
                                        </div>
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                        <button data-modal-toggle="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>

                                    </form>

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
            @empty
                <td class="py-4 px-6">
                    <h2>mahsulot yo'q!</h2>
                </td>
            @endforelse
          
        </tbody>
    </table>
</section>

</div>
    
@endsection
@section('scripts')
<script>
    $(function () {
        $('#delbtn').click(function () {
            return confirm('Are you sure?');
        });
        // qidiruv tizimi
        $('#search-btn').click(function(e){
            e.preventDefault();
            
            // alert('ok');
            $('#tbody').html('');
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
            });
            
            $.ajax({
                  url: "{{ route('getProductData') }}",
                  method: 'get',
                  data: {
                     s:$('#simple-search').val()
                  },
                  success: function(result){
                    result.data.forEach(f);
                    function f(item, index){
                      
                            
                            $("#tbody").html($("#tbody").html()+"<tr><td scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white'>"+item.name+"</td><td class='py-4 px-6'>"+item.amount+"</td><td class='py-4 px-6'>"+item.original_price+"</td><td class='py-4 px-6' >"+item.sale_price+"</td></tr>");
                       
                       

                    }

                  }

            });
         
        });

    });
</script>
@endsection