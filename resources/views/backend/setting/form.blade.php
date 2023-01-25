<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Setting<span>/ eCommerce</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <input type="text" class="form-control input-date-predefined">
                </div>
            </div>
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Add Setting</h3>
                    </div>
                    <div class="box-body">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link {{ $tab == 'website' ? 'active' : '' }}" href="{{ route('backend.settings.index', 'website') }}" role="tab">
                                    {{__('Website')}}
                                </a>
    
                                <a class="nav-item nav-link {{ $tab == 'company' ? 'active' : '' }}" href="{{ route('backend.settings.index','company') }}" role="tab">
                                    {{__('Company')}}
                                </a>
    
                                <a class="nav-item nav-link {{ $tab == 'social' ? 'active' : '' }}" href="{{ route('backend.settings.index','social') }}" role="tab">
                                    {{__('Social')}}
                                </a>
                            </div>
                        </nav>
    
                        <div class="tab-content" id="nav-tabContent">
                            @if ($tab == 'website')
                                <div class="tab-pane fade active show" id="website" role="tabpanel">
                                    @include('backend.setting._website')
                                </div>
                            @endif
    
                            @if ($tab == 'company')
                                <div class="tab-pane fade active show" id="company" role="tabpanel">
                                    @include('backend.setting._company')
                                </div>
                            @endif
    
                            @if ($tab == 'social')
                                <div class="tab-pane fade active show" id="social" role="tabpanel">
                                    <livewire:social-form />
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>