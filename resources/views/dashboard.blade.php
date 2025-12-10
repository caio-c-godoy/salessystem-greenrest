<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-sm text-gray-600 mb-1">Green Rest Portal</p>
            <h2 class="text-2xl font-semibold text-[#0b2f26] leading-tight">Dashboard</h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="glass-card p-5">
            <p class="text-sm text-gray-500">Status</p>
            <h3 class="text-xl font-semibold text-[#0b2f26] mt-1">Você está logado</h3>
            <p class="text-gray-600 mt-2">Acesse pedidos, parceiros e configurações pelo menu superior.</p>
        </div>
        <div class="glass-card p-5">
            <p class="text-sm text-gray-500">Produtos</p>
            <h3 class="text-lg font-semibold text-[#125c4b]">Catálogo sempre atualizado</h3>
            <p class="text-gray-600 mt-2">Gerencie variantes, preços por parceiro e disponibilidade.</p>
        </div>
        <div class="glass-card p-5">
            <p class="text-sm text-gray-500">Pedidos & Invoices</p>
            <h3 class="text-lg font-semibold text-[#125c4b]">Fluxo integrado</h3>
            <p class="text-gray-600 mt-2">Acompanhe produção, faturamento e documentos em um só lugar.</p>
        </div>
    </div>
</x-app-layout>
