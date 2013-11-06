<?php namespace Stevemo\Cpanel\Permission\Repo;

interface PermissionInterface {

    /**
     * Grab all the permissions from storage
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param array $columns
     *
     * @return \StdClass
     */
    public function all($columns = array('*'));

    /**
     * Put into storage a new permission
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param array $data
     *
     * @return \StdClass
     */
    public function create(array $data);

    /**
     * Delete a permission from storage
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param $id
     *
     * @return bool
     */
    public function delete($id);

    /**
     *
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param       $id
     * @param array $columns
     *
     * @return null|\StdClass
     */
    public function find($id, $columns = array('*'));

    /**
     *
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param       $id
     * @param array $columns
     *
     * @throws PermissionNotFoundException
     *
     * @return mixed
     */
    public function findOrFail($id, $columns = array('*'));

    /**
     * Merge group permission with database permission
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param array $groupPermissions
     * @param array $merge
     *
     * @return array
     */
    public function mergePermissions(array $groupPermissions, array $merge = array());

    /**
     * Update a permission into storage
     *
     * @author Steve Montambeault
     * @link   http://stevemo.ca
     *
     * @param array $data
     *
     * @return bool
     */
    public function update(array $data);

} 