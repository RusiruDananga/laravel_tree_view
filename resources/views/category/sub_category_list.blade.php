@foreach($subcategories as $subcategory)
<ul>
    <li>{{$subcategory->title}}</li>
    @if(count($subcategory->subcategory))
    @include('category.sub_category_list',['subcategories' => $subcategory->subcategory])
    @endif
</ul>
@endforeach