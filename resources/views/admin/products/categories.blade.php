@extends('admin.layout.base')

@section('title', 'Product Categories')

@section('data-page-id', 'adminCategories')

@section('content')
    <style>
        tr, td {
            padding: .5rem .3rem;
            background-color: #f2f2f4;
        }
    </style>
    <div class="category">
        <div class="container">
            <h2>Product Categories</h2>

            @include('includes.message')

            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="input-group-field" placeholder="Search by name">
                            <input type="submit" class="button" value="Search">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="/admin/product/categories" method="post">
                        <div class="input-group">
                            <input type="text" class="input-group-field" name="name" placeholder="Category Name">
                            <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                            <input type="submit" class="button" value="Create">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row" style="margin-top: 3rem;">
                <div class="col-md-12">
                    @if(count($categories))
                        <table width="100%">
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category['name'] }}</td>
                                        <td>{{ $category['slug'] }}</td>
                                        <td>{{ $category['added'] }}</td>
                                        <td width="100" class="text-right">
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Add Subcategory">
                                                <a style="padding-right:10px;">&#10133;</a>
                                            </span>
                                            <button type="button" data-modal-trigger="modal-{{ $category['id'] }}">Edit</button>
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Edit Category">
                                                <a style="padding-right:10px;" data-open="item-{{ $category['id'] }}">&#128221;</a>
                                            </span>
                                            <span style="display:inline-block;" data-tooltip tabindex="1" class="has-tip top" title="Delete Category">
                                                <form method="post" action="/admin/product/categories/{{$category['id']}}/delete" class="delete-item">
                                                    <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                                                    <button type="submit"><i class="delete">&#10060;</i></button>
                                                </form>
                                            </span>
                                            <div class="modal">
                                                <div class="modal__container" data-modal-id="modal-{{ $category['id'] }}">
                                                    <div class="modal__backdrop"></div>
                                                    <div class="modal__content">
                                                        <div class="modal__alerts">
                                                        </div>
                                                        <div class="modal__head">
                                                            <h3 class="heading-light heading-3">Edit Category</h3>
                                                        </div>
                                                        <div class="modal__body">
                                                            <form>
                                                                <div class="input-group">
                                                                    <input type="text" class="input-group-field" id="item-{{ $category['id'] }}" name="name" placeholder="Category Name" value="{{ $category['name'] }}">
                                                                    <input type="submit" class="button update-category" name="token" data-token="{{ \App\Classes\CSRFToken::_token() }}" id="{{ $category['id'] }}" value="Update">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal__foot">
                                                            <a class="btn btn--default" href="#" data-modal-close="modal-{{ $category['id'] }}">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {!! $links !!}

                    @else
                        <h3>You have not created any categories!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('includes.delete-modal')

@endsection
