@extends('admin.admin-index')

@section('title','Добавить пост')
@section('content')


    <div class="col-md-7">
        {!! Form::open(['route' => 'admin-panel.store','files'=>true]) !!}
        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('title', 'Заголовок')}}
            </div>
            <div class="col-md-9">
                {{Form::text('title',null,['class'=>'form-control','id'=>'title-slug'])}}

            </div>
        </div>

            <div class="form-group">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    <div style="padding-left: 100% ">

                    </div>
                    {{Form::text('slug', null,['class'=>'form-control','id'=>'slug','hidden'])}}


                </div>
            </div>

                <div class="form-group">
                    <div class="col-md-3">
                        {{Form::label('content', 'Текст поста')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::textarea('content', null,['class'=>'form-control'])}}
                    </div>
                </div>


        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('categories', 'Категория')}}
            </div>
            <div class="col-md-9">

                {!! Form::select('categories', ['','culture'=>'Культура', 'Policy'=>'Политика', 'Sport'=>'Спорт'], null , ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('tags', 'Теги')}}
            </div>
            <div class="col-md-9">
                {{Form::text('tags', null,['class'=>'form-control'])}}
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('image', 'Изображение')}}
            </div>
            <div class="col-md-9">
                {{ Form::file('image', ['class'=>'form-control']) }}
            </div>
        </div>





                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            {{Form::submit('Опубликовать',['class'=>'btn btn-primary'])}}
                        </div>
                    </div>
        </div>
        {!! Form::close() !!}
    </div>

    @endsection