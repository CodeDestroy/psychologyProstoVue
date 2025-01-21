<template>
    <div class="bg-slate-100 py-24 sm:py-32" id="content-to-convert">
      <div class="mx-auto max-w-4xl text-center">
        <p class="text-4xl font-bold tracking-tight text-purple-800 sm:text-5xl">План семинара</p>
      </div>
      <div class="mx-auto max-w-7xl mt-12  px-6 lg:px-8">
        <ul role="list" class="space-y-3">
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>История возникновения понятий переноса и контрпереноса.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Определение понятий переноса и контрпереноса. Причины их возникновения.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Формирование рабочего альянса и организация безопасного аналитического пространства.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Типы переноса и контрпереноса: невротический, психотический, позитивный, негативный, эротический.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Контрпереносная динамика при работе с пациентами, страдающими нарциссическим расстройством.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Типы интерпретаций переноса.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Сновидения: перенос и контрперенос. Практический разбор сна.</p>
          </li>
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
            <p>Групповая супервизия с акцентом на работу с переносом/контрпереносом.</p>
          </li>
        </ul>
      </div>
    </div>
  </template>
  
  <script setup>
  const items = [
    { id: 1 },
    // More items...
  ]
  </script>