
<x-layout.base-layout>
    <x-slot name="pageSeoTitle">Log in</x-slot>
    <x-slot name="pageHeading">Log in</x-slot>
    
    <x-slot name="mainBody">     
        <form method="post" action="/login">
  
            @csrf
            <x-forms.formrow-2col-withIcon>
                <x-slot name="formRowInputIcon">
                    <i class="bi bi-envelope-at"></i>
                </x-slot>
                <x-slot name="formRowInputField">
                    <input type="text" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter Login ID">
                </x-slot>
                <x-slot name="formRowInputError">
                    @error('userEmail'){{$message}} @enderror
                </x-slot>
            </x-forms.formrow-2col-withIcon>
            
            <x-forms.formrow-2col-withIcon>
                <x-slot name="formRowInputIcon">
                    <i class="bi bi-key"></i>
                </x-slot>
                <x-slot name="formRowInputField">
                    <input type="password" class="form-control" id="userPassword" name="userPassword"  placeholder="Enter Password">
                </x-slot>
                <x-slot name="formRowInputError">
                    @error('userpassword'){{$message}} @enderror
                </x-slot>
            </x-forms.formrow-2col-withIcon>

            <x-forms.formrow-1col>
                <x-slot name="formRowInputField">
                    <button type="submit" class="btn btn-primary"><span class="bi bi-box-arrow-in-right"></span> Submit</button>
                    <a href="/auth?forgot=true" class="forgot-password-link">Reset Password</a>
                </x-slot>
            </x-forms.formrow-1col>
            
        </form>
    </x-slot>
    
</x-layout.base-layout>
