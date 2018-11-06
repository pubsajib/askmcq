<div class="question-services">
    <div class="container">
        <div class="row d-none">
            <div class="col-sm-12">
                <div class="highlight-title">
                    <nav aria-label="breadcrumb">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="title">Choose Categories</div>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        @if ($groups)
            <div class="services home">
                <div class="row">
                    @foreach ($groups as $group)
                        @if (!$group->categories->isEmpty())
                            <div class="col-6 col-sm-2">
                                <div class="items catItem" @click="groupModal({{ $group->id }})">
                                    <div class="icon">
                                        <img class="default-img" src="images/icon/service2.png" alt="">
                                        <img class="hover-img" src="images/icon/service1.png" alt="">
                                    </div>
                                    {{-- {{ json_encode($group) }} --}}
                                    <h4>{{ $group->name }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div><!-- Services -->