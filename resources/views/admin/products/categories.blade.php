@extends('admin.layout.base')

@section('title', 'Product Categories')

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
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at->toFormattedDateString() }}</td>
                                        <td width="100" class="text-right">
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Add Subcategory">
                                                <a style="padding-right:10px;" data-open="add-subcategory-{{ $category['id'] }}">&#10133;</a>
                                            </span>
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Edit Category">
                                                <a style="padding-right:10px;" data-open="item-{{ $category['id'] }}">&#128221;</a>
                                            </span>
                                            <span style="display:inline-block;" data-tooltip tabindex="1" class="has-tip top" title="Delete Category">
                                                <form method="post" action="/admin/product/categories/{{$category['id']}}/delete" class="delete-item">
                                                    <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                                                    <button type="submit"><i class="delete">&#10060;</i></button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3>You have not created any categories!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
