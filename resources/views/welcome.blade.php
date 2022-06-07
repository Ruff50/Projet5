<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>

<div class="flex min-h-screen w-full items-center justify-center">
  <div x-data="{ filters: ['All', 'Free', 'Premium'], selected: 'All' }"
    class="inline-flex rounded-lg my-3 bg-gray-100 bg-opacity-30 mx-auto">
    <template x-for="(filter, index) in filters">
      <button @click="selected = filter"
        :class="[(index === filters.length -1) && '!rounded-r-lg', (index === 0) && '!rounded-l-lg', filter === selected && 'border-green-500 bg-green-500 text-white']"
        class="py-[10px] sm:py-2 my-1 px-[12px] sm:px-6 inline-flex items-center justify-center font-medium border border-gray-50 text-center focus:bg-primary text-black text-sm sm:text-base capitalize bg-white"
        x-text="filter">
      </button>
    </template>
  </div>
</div>
</body>
</html>
