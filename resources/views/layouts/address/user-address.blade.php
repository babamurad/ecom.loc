<div>
    <div class="form-group">
        <input type="text" name="address1"  placeholder="Address *" wire:model="address1">
        @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <input type="text" name="address2"  placeholder="Address line2" wire:model="address2">
    </div>
    <div class="form-group">
        <input  type="text" name="city" placeholder="City / Town *" wire:model="city">
        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <input  type="text" name="state" placeholder="State / County *" wire:model="state">
        @error('state') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <input  type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="zipcode">
        @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <input  type="text" name="phone" placeholder="Phone *" wire:model="phone">
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
