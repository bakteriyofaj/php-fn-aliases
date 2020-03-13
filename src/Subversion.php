<?php

namespace BakteriyoFaj\PhpFnAliases;

class Subversion extends PhpMethodCaller
{
    const Add                      = "svn_add";                             // Schedules the addition of an item in a working directory
    const AuthGetParameter         = "svn_auth_get_parameter";              // Retrieves authentication parameter
    const AuthSetParameter         = "svn_auth_set_parameter";              // Sets an authentication parameter
    const Blame                    = "svn_blame";                           // Get the SVN blame for a file
    const Cat                      = "svn_cat";                             // Returns the contents of a file in a repository
    const Checkout                 = "svn_checkout";                        // Checks out a working copy from the repository
    const Cleanup                  = "svn_cleanup";                         // Recursively cleanup a working copy directory, finishing incomplete operations and removing locks
    const ClientVersion            = "svn_client_version";                  // Returns the version of the SVN client libraries
    const Commit                   = "svn_commit";                          // Sends changes from the local working copy to the repository
    const Delete                   = "svn_delete";                          // Delete items from a working copy or repository
    const Diff                     = "svn_diff";                            // Recursively diffs two paths
    const Export                   = "svn_export";                          // Export the contents of a SVN directory
    const FsAbortTxn               = "svn_fs_abort_txn";                    // Abort a transaction, returns true if everything is okay, false otherwise
    const FsApplyText              = "svn_fs_apply_text";                   // Creates and returns a stream that will be used to replace
    const FsBeginTxn2              = "svn_fs_begin_txn2";                   // Create a new transaction
    const FsChangeNodeProp         = "svn_fs_change_node_prop";             // Return true if everything is ok, false otherwise
    const FsCheckPath              = "svn_fs_check_path";                   // Determines what kind of item lives at path in a given repository fsroot
    const FsContentsChanged        = "svn_fs_contents_changed";             // Return true if content is different, false otherwise
    const FsCopy                   = "svn_fs_copy";                         // Copies a file or a directory, returns true if all is ok, false otherwise
    const FsDelete                 = "svn_fs_delete";                       // Deletes a file or a directory, return true if all is ok, false otherwise
    const FsDirEntries             = "svn_fs_dir_entries";                  // Enumerates the directory entries under path; returns a hash of dir names to file type
    const FsFileContents           = "svn_fs_file_contents";                // Returns a stream to access the contents of a file from a given version of the fs
    const FsFileLength             = "svn_fs_file_length";                  // Returns the length of a file from a given version of the fs
    const FsIsDir                  = "svn_fs_is_dir";                       // Return true if the path points to a directory, false otherwise
    const FsIsFile                 = "svn_fs_is_file";                      // Return true if the path points to a file, false otherwise
    const FsMakeDir                = "svn_fs_make_dir";                     // Creates a new empty directory, returns true if all is ok, false otherwise
    const FsMakeFile               = "svn_fs_make_file";                    // Creates a new empty file, returns true if all is ok, false otherwise
    const FsNodeCreatedRev         = "svn_fs_node_created_rev";             // Returns the revision in which path under fsroot was created
    const FsNodeProp               = "svn_fs_node_prop";                    // Returns the value of a property for a node
    const FsPropsChanged           = "svn_fs_props_changed";                // Return true if props are different, false otherwise
    const FsRevisionProp           = "svn_fs_revision_prop";                // Fetches the value of a named property
    const FsRevisionRoot           = "svn_fs_revision_root";                // Get a handle on a specific version of the repository root
    const FsTxnRoot                = "svn_fs_txn_root";                     // Creates and returns a transaction root
    const FsYoungestRev            = "svn_fs_youngest_rev";                 // Returns the number of the youngest revision in the filesystem
    const Import                   = "svn_import";                          // Imports an unversioned path into a repository
    const Log                      = "svn_log";                             // Returns the commit log messages of a repository URL
    const List                     = "svn_ls";                              // Returns list of directory contents in repository URL, optionally at revision number
    const MakeDir                  = "svn_mkdir";                           // Creates a directory in a working copy or repository
    const ReposCreate              = "svn_repos_create";                    // Create a new subversion repository at path
    const ReposFsBeginTxnForCommit = "svn_repos_fs_begin_txn_for_commit";   // Create a new transaction
    const ReposFsCommitTxn         = "svn_repos_fs_commit_txn";             // Commits a transaction and returns the new revision
    const ReposFs                  = "svn_repos_fs";                        // Gets a handle on the filesystem for a repository
    const ReposHotcopy             = "svn_repos_hotcopy";                   // Make a hot-copy of the repos at repospath; copy it to destpath
    const ReposOpen                = "svn_repos_open";                      // Open a shared lock on a repository
    const ReposRecover             = "svn_repos_recover";                   // Run recovery procedures on the repository located at path
    const Revert                   = "svn_revert";                          // Revert changes to the working copy
    const Status                   = "svn_status";                          // Returns the status of working copy files and directories
    const Update                   = "svn_update";                          // Update working copy
}