
<x-layout.base-layout>
    <x-slot name="pageSeoTitle">Log in</x-slot>
    <x-slot name="pageHeading">Log in</x-slot>
    
    <x-slot name="mainBody">        
        <form>

            <div class="row g-2">
                <div class="col p-1 input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-envelope-at"></i>
                    </span>
                    <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter Login ID">
                </div>    
                <div class="col p-1"><label for="userEmail" class="form-label"></label></div>
            </div>

            <div class="row g-2">
                <div class="col p-1 input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key"></i>
                    </span>
                    <input type="password" class="form-control" id="userPassword"  placeholder="Enter Password" size="50">
                </div>
                <div class="col p-1"><label for="userPassword" class="form-label"></label></div>
            
            </div>
            <div class="row g-2">
                <div class="col p-1"><button type="submit" class="btn btn-primary"><span class="bi bi-box-arrow-in-right"></span> Submit</button></div>
                <div class="col p-1"></div>
                
            </div>
        </form>
    </x-slot>
    
</x-layout.base-layout>
