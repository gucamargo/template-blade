<div class="px-12 flex flex-row items-center justify-between p-4 w-full border-b border-solid border-gray-300">
    <div class="">
        <img src="{{ Vite::asset('resources/img/logo.png') }}" />
    </div>
    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-form.input
            type="text"
            name="search"
            placeholder="Search"
            size="medium"
            icon="search"
            iconPosition="right"
        ></x-form.input>
        <x-form.button
            type="button"
            variation="primary"
            size="medium"
            icon="search"
            iconPosition="left"
        ></x-form.button>
    </div>
    <div class="flex flex-row items-center space-x-0.5">

        <x-form.button
            class="flex md:hidden"
            type="button"
            variation="primary"
            size="small"
            icon="search"
            iconPosition="left"
        ></x-form.button>

        <x-form.button
            type="button"
            variation="primary"
            size="medium"
            icon="person"
            iconPosition="left"
            text="Login"
        ></x-form.button>
        <x-form.button
            type="button"
            variation="primary"
            size="medium"
            icon="shopping_cart"
            iconPosition="left"
        ></x-form.button>
    </div>
</div>