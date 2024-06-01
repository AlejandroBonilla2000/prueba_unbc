<div style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
    @if (session()->has('error'))
        <div style="margin-bottom: 15px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 3px; color: #721c24;">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="login" style="display: flex; flex-direction: column;">
        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">
            @error('email') <span style="color: #dc3545;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">
            @error('password') <span style="color: #dc3545;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;">Login</button>
    </form>
</div>
