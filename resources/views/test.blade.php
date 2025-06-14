@php
    $fruits = ['mango','banana','graps'];
@endphp
<script>
    // var fruits = @json($fruits);
    var fruits = {{ Js::from($fruits) }};

    fruits.forEach(element => {
    console.log(element);
        
    });
</script>