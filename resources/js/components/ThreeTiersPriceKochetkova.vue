<template>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
          <p class="mt-2 text-4xl font-bold tracking-tight text-purple-800 sm:text-5xl">Стоимость</p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">02 февраля 2025 года (воскресенье)</p>
        <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <div v-for="tier in tiers" :key="tier.id" :class="[tier.featured ? 'bg-green-950 ring-green-950' : 'ring-gray-200', 'rounded-3xl p-8 ring-1 xl:p-10']">
            <h3 :id="tier.id" :class="[tier.featured ? 'text-white' : 'text-gray-900', 'text-lg font-semibold leading-8']">{{ tier.name }}</h3>
            <p :class="[tier.featured ? 'text-gray-300' : 'text-gray-600', 'mt-4 text-sm leading-6']">{{ tier.description }}</p>
            <p class="mt-6 flex items-baseline gap-x-1">
              <span :class="[tier.featured ? 'text-white' : 'text-gray-900', 'text-4xl font-bold tracking-tight']">{{ typeof tier.price === 'string' ? tier.price : tier.price[frequency.value] }}</span>
              <span v-if="typeof tier.price !== 'string'" :class="[tier.featured ? 'text-gray-300' : 'text-gray-600', 'text-sm font-semibold leading-6']">{{ frequency.priceSuffix }}</span>
            </p>
            <a :href="tier.href + '/' + frequency.value + '/' + tier.price[frequency.value]" :aria-describedby="tier.id" :class="[tier.featured ? 'bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white' : 'bg-purple-800 text-white shadow-sm hover:bg-purple-700 focus-visible:outline-purple-800', 'mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2']">{{ tier.cta }}</a>
            <ul role="list" :class="[tier.featured ? 'text-gray-300' : 'text-gray-600', 'mt-8 space-y-3 text-sm leading-6 xl:mt-10']">
              <li v-for="feature in tier.features" :key="feature" class="flex gap-x-3">
                <CheckIcon :class="[tier.featured ? 'text-white' : 'text-purple-800', 'h-6 w-5 flex-none']" aria-hidden="true" />
                {{ feature }}
              </li>
            </ul>
            
          </div>
          <div class="bg-green-950 ring-green-950 rounded-3xl p-8 ring-1 xl:p-10">
            <h3 class="text-white text-lg font-semibold leading-8">Организации</h3>
            <p class="text-gray-300 mt-4 text-sm leading-6">Практико-ориентированный семинар</p>
            <p class="mt-6 flex items-baseline gap-x-1">
              <span class="text-white text-4xl font-bold tracking-tight">По запросу</span>
            </p>
            <a href="/contacts" class="bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Узнать</a>
            <ul role="list" class="text-gray-300 mt-8 space-y-3 text-sm leading-6 xl:mt-10">
              <li class="flex gap-x-3">
                <CheckIcon class="text-white h-6 w-5 flex-none" aria-hidden="true" />
                психологи
              </li>
              <li class="flex gap-x-3">
                <CheckIcon class="text-white h-6 w-5 flex-none" aria-hidden="true" />
                психотерапевты
              </li>
              <li class="flex gap-x-3">
                <CheckIcon class="text-white h-6 w-5 flex-none" aria-hidden="true" />
                студенты профильных высших учебных заведений различных форм собственности очной формы обучения
              </li>
            </ul>
            
          </div>
          
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import { RadioGroup, RadioGroupOption } from '@headlessui/vue'
  import { CheckIcon } from '@heroicons/vue/20/solid'
  
  const frequencies = [
    { value: '100', label: '100%', priceSuffix: '' },
  ]
  const tiers = [
    {
      name: 'Базовый',
      id: 'tier-base',
      href: '/payment/tier-base4/4',
      price: { 100: '5000' },
      description: 'Практико-ориентированный семинар',
      features: [
        'психологи',
        'психотерапевты'
      ],
      featured: false,
      cta: 'Оплатить',
    },
    {
      name: 'Льготный',
      id: 'tier-privilege',
      href: '/payment/tier-students4/4',
      price: { 100: '4000' },
      description: 'Практико-ориентированный семинар',
      features: [
        'студенты профильных высших учебных заведений различных форм собственности очной формы обучения'
      ],
      featured: false,
      cta: 'Оплатить',
    },
    /* {
      name: 'Организации',
      id: 'tier-enterprise',
      href: '/payment/tier-enterprise4/4',
      price: 'По запросу',
      description: 'Практико-ориентированный семинар',
      features: [
        'психологи',
        'психотерапевты',
        'студенты профильных высших учебных заведений различных форм собственности очной формы обучения'
      ],
      featured: true,
      cta: 'Узнать',
    }, */
  ]
  
  const frequency = ref(frequencies[0])
  </script>