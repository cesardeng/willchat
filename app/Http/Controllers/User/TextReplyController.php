<?php

namespace App\Http\Controllers\User;

use App\Repositories\ReplyRepository;
use Illuminate\Http\Request;

class TextReplyController extends UserController
{
    /**
     * @var ReplyRepository
     */
    private $replyRepository;

    public function __construct(ReplyRepository $replyRepository)
    {
        parent::__construct();

        $this->replyRepository = $replyRepository;
    }

    public function index()
    {
        $replies = $this->replyRepository->paginate();

        return user_view('reply.textreplylist', compact('replies'));
    }

    public function getCreate()
    {
        return user_view('reply.textreplyform');
    }

    public function postCreate(Request $request)
    {
        $this->replyRepository->store($request, \Session::get('account_id'));

        return success('保存成功');
    }

    public function getUpdate($id)
    {
        return user_view('reply.textreplyform');
    }

    public function postUpdate(Request $request)
    {
        $this->replyRepository->store($request, \Session::get('account_id'));

        return success('保存成功');
    }

    public function enable($ids)
    {
        return success('删除成功');
    }

    public function disable($ids)
    {
        return success('删除成功');
    }

    public function destroy($ids)
    {
        return success('删除成功');
    }
}
