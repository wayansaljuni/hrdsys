<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form Create User') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    
    <div>
        @session('success'),
            <div class=\"flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800\" role=\"alert\">
                <svg class=\"flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4\"></path>
                </svg>
                <span class=\"font-medium\"> {{ $value }} </span>
            </div>
        @endsession



        <a href="{{ route("users.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Back
        </a>
        <div class="w-150">   
            <form wire:submit="submit" class="mt-6 space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />
                <flux:input wire:model="email" label="Email" type="email" placeholder="Email" />
                <flux:input wire:model="password" label="Password" type="password" placeholder="Password" />
                <flux:input wire:model="confirm_password" label="Confirm Password" type="password" placeholder="Confirm Password" />
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>
    </div>

</div>
