<div @class(["rounded-md p-4", $getBgClass])>
    <div class="flex">
        <div>
            <h3 class="text-sm font-medium text-red-800">{{ $titulo }}</h3>
            <div class="mt-2 text-sm text-red-700">
                <span>{{ $mensagem }}</span>
            </div>
            {{ $users }}
        </div>
    </div>
</div>s