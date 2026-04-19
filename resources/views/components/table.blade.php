<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
            <tr>
                @foreach($header as $title)
                    <th scope="col" class="px-6 py-3 font-medium">
                        {{ $title }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($tableData as $elemento)

                <tr class="bg-neutral-primary border-b border-default">
                    @foreach($elemento as $key => $valor)
                       
                        @if($key=="name")
                            <td class="px-6 py-4"><a href="#">{{!!$valor!!}}</a></td>
                        @else
                            <td class="px-6 py-4">{{$valor}}</td>
                        @endif

                    @endforeach
                </tr>
                
            @endforeach
            

        </tbody>
    </table>
</div>